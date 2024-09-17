"use client";
import { Button } from "@/components/atomics/button";
import { Checkbox } from "@/components/atomics/checkbox";
import { Input } from "@/components/atomics/input";
import Title from "@/components/atomics/title";
import Image from "next/image";
import Link from "next/link";
import {
  Form,
  FormControl,
  FormField,
  FormItem,
  FormMessage,
} from "@/components/atomics/form";
import { useForm } from "react-hook-form";
import * as yup from "yup";
import { yupResolver } from "@hookform/resolvers/yup";
import { useRouter, useSearchParams } from "next/navigation";
import { useToast } from "@/components/atomics/use-toast";
import { useLoginMutation } from "@/services/auth.service";
import { signIn } from "next-auth/react";

const schema = yup.object().shape({
  email: yup.string().email().required(),
  password: yup.string().min(8).max(32).required(),
});

type FormData = yup.InferType<typeof schema>;

function SignIn() {
  const searchParams = useSearchParams();
  const router = useRouter();
  const { toast } = useToast();
  const form = useForm<FormData>({
    resolver: yupResolver(schema),
    defaultValues: {
      email: "",
      password: "",
    },
  });

  const [login, { isLoading }] = useLoginMutation();
  async function onSubmit(values: FormData) {
    try {
      const res = await login(values).unwrap(); 

      if (res.success) {
        const user = res.data;
      
        // Ensure you pass the correct params to signIn based on what NextAuth expects for credentials
        const loginRes = await signIn("credentials", {
          email: user.email,
          token: user.token, // Assuming the token is part of credentials
          callbackUrl: searchParams.get("callbackUrl") || "/",
          redirect: false, // Set to false to prevent auto-redirect; we'll manually redirect
        });
      
        if (loginRes?.error) {
          // Handle error from NextAuth if it occurs
          toast({
            title: "Sign In Failed",
            description: loginRes.error || "An unknown error occurred",
            variant: "destructive",
            open: true,
          });
        } else {
          toast({
            title: "Welcome",
            description: "Sign in successfully",
            open: true,
          });
      
          // Redirect to the callbackUrl or fallback to homepage
          router.push(loginRes?.url || "/");
        }
      }
      
      // router.push("/"); // Optionally redirect
    } catch (error: any) {
      console.error("🚀 ~ onSubmit Error ~error:", error); // Log the error details
      
      // Provide fallback if error.data or error.data.message is undefined
      const errorMessage = error?.data?.message || "An unexpected error occurred. Please try again.";
      toast({
        title: "Something went wrong",
        description: errorMessage,
        variant: "destructive",
      });
    }
  }
  
  return (
    <div
      className={`px-6 py-24 lg:px-28 bg-primary-foreground bg-cover lg:bg-contain bg-right bg-no-repeat bg-[url('/images/bg-image.svg')] h-screen flex items-center`}
    >
      <div className="p-8 bg-white rounded-[30px] max-w-full lg:max-w-[460px] lg:min-w-[460px] space-y-[30px]">
        <Image src="/images/logo.svg" alt="nidejia" height={36} width={133} />
        <Title
          title="Sign In"
          subtitle="Rent and make money online"
          section=""
        />

        {/* Form for create account */}
        <Form {...form}>
          <form
            onSubmit={form.handleSubmit(onSubmit)}
            className="space-y-[30px]"
          >
            <div className="space-y-5">
              <FormField
                control={form.control}
                name="email"
                render={({ field }) => (
                  <FormItem>
                    <FormControl>
                      <Input
                        type="text"
                        placeholder="Email Address"
                        icon="/icons/sms.svg"
                        variant="auth"
                        className={
                          form.formState.errors.email && "border-destructive"
                        }
                        {...field}
                      />
                    </FormControl>
                    <FormMessage />
                  </FormItem>
                )}
              />
              <FormField
                control={form.control}
                name="password"
                render={({ field }) => (
                  <FormItem>
                    <FormControl>
                      <Input
                        type="password"
                        placeholder="Password"
                        icon="/icons/lock-circle.svg"
                        variant="auth"
                        className={
                          form.formState.errors.password && "border-destructive"
                        }
                        {...field}
                      />
                    </FormControl>
                    <FormMessage />
                  </FormItem>
                )}
              />
            </div>
            <div className="flex items-center space-x-2">
              <Checkbox id="terms" />
              <label
                htmlFor="terms"
                className="text-sm font-semibold leading-[21px] peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
              >
                Remember me
              </label>
            </div>
            <Button type="submit" disabled={isLoading}>
              Sign In
            </Button>
            <Link href="/sign-up">
              <Button variant="third" type="button" className="mt-3">
                Create New Account
              </Button>
            </Link>
          </form>
        </Form>
      </div>
    </div>
  );
}

export default SignIn;
