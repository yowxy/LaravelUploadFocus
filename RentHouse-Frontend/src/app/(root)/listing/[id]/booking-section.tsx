import { Button } from "@/components/atomics/button";
import Title from "@/components/atomics/title";
import { useToast } from "@/components/atomics/use-toast";
import CardBooking from "@/components/molecules/card/card-booking";
import { DatePickerDemo } from "@/components/molecules/date-picker";
import { moneyFormat } from "@/lib/utils";
import { useCheckAvailabilityMutation } from "@/services/transaction.service";
import moment from "moment";
import Image from "next/image";
import Link from "next/link";
import React, { useMemo, useState } from "react";

interface BookingSectionProps {
  id: number;
  price: number;
}

 

function BookingSection({ id , price}: BookingSectionProps) {

  const [startDate, setStartDate] = useState<Date>();
  const [endDate, setEndDate] = useState<Date>();

  const [checkAvailability,{ isLoading } ] = useCheckAvailabilityMutation();
  const {toast} = useToast();

  const booking = useMemo(() => {
    let totalDays = 0,
        subtotal =  0,
        tax = 0,
        grandTotal = 0;

    if(startDate && endDate){
      totalDays = moment(endDate).diff(startDate, "days");
      subtotal = totalDays * price;
      tax = subtotal * 0.1;
      grandTotal = subtotal + tax;
    }
    
    return {totalDays, subtotal, tax, grandTotal}
  },[startDate, endDate]);

  const handleBook = async () => {
    if (!startDate || !endDate || startDate >= endDate) {
      toast({
        title: "Invalid dates",
        description: "Please select a valid date range.",
        variant: "destructive",
      });
      return;
    }
  
    console.log("Booking started...");
    try {
      const data = {
        listing_id: id,
        start_date: moment(startDate).format("YYYY-MM-DD"),
        end_date: moment(endDate).format("YYYY-MM-DD"),
      };
      
      console.log("Sending data:", data);
      
      const res = await checkAvailability(data).unwrap();
      console.log("Response data:", res);
      
      toast({
        title: "Success",
        description: res.message,
      });
  
    } catch (error: any) {
      console.log("Error:", error);  // Log full error for debugging
      if (error.status === 401) {
        toast({
          title: "Something went wrong",
          description: "Please login",
          variant: "destructive",
          action: (
            <Link href={`/sign-in?callbackUrl=${window.location.href}`}>
              Sign-in
            </Link>
          ),
        });
      } else if (error.status === 404) {
        toast({
          title: "Error",
          description: error.data.message,
        });
      } else {
        toast({
          title: "Error",
          description: "An unexpected error occurred.",
        });
      }
    }
  };
  

  return (
    <div className="w-full max-w-[360px] xl:max-w-[400px] h-fit space-y-5 bg-white border border-border rounded-[20px] p-[30px] shadow-indicator">
      <h1 className="font-bold text-lg leading-[27px] text-secondary">
        Start Booking
      </h1>
      <span className="leading-6">
      <span className="font-bold text-4xl leading-[54px]">{moneyFormat.format(price)}</span>
        /day
      </span>
      <div className="space-y-5">
        <DatePickerDemo 
         placeholder="Start date" 
         date={startDate} 
         setDate={setStartDate} 
         />
        <DatePickerDemo   
        placeholder="End date" 
        date={endDate} 
        setDate={setEndDate} 
        />
      </div>
      <div className="space-y-5">
        <CardBooking title="Total days" value={`${booking.totalDays} days `} />
        <CardBooking title="Sub total" value={moneyFormat.format(booking.subtotal)}/>
        <CardBooking title="Tax (10%)" value={moneyFormat.format(booking.tax)} />
        <CardBooking title="Grand total price" value={moneyFormat.format(booking.grandTotal)} />
      </div>
        <Button variant="default" className="mt-4" onClick={handleBook} disabled={isLoading} >
          Book Now
        </Button>
      <div className="bg-gray-light p-5 rounded-[20px] flex items-center space-x-4">
        <Image src="/icons/medal-star.svg" alt="icon" height={36} width={36} />
        <div>
          <Title
            section="booking"
            title="77% Off Discount"
            subtitle="BuildWithAngga card is giving you extra priviledge today."
          />
        </div>
      </div>
    </div>
  );
}

export default BookingSection;
