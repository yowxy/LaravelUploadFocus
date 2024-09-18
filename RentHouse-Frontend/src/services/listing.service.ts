import { apiSlice } from "./base-query";

export const listingApi = apiSlice.injectEndpoints({
  endpoints: (build) => ({
    getAllListing: build.query({
      query: () => ({
        url: "/listing",
        method: "GET",
      }),
    }),
  }),
});

export const { useGetAllListingQuery } = listingApi;
