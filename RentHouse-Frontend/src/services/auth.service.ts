import { apiSlice } from "./base-query";

export const authapi = apiSlice.injectEndpoints({
    endpoints: (build) => ({
        login: build.mutation({
              query:(Credential) => ({
                url: '/login',
                method: 'POST',
                body: Credential,
              }) 
        })
    }),
})


export const{useLoginMutation} = authapi;