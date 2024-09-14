import { apiSlice } from "./base-query"; // Ensure base-query is correctly set up

export const authapi = apiSlice.injectEndpoints({
    endpoints: (build) => ({
        login: build.mutation({
            query: (Credential) => ({
              url: "/login", // Ensure this matches the correct login route
              method: 'POST', // Corrected: matching single quotes
              body: Credential, // Credential should match the expected API format
            }),
        }),
    }),
});

// Export the hook for login mutation
export const { useLoginMutation } = authapi;
