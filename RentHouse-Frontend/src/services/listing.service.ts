import { apiSlice } from "./base-query";

export const listingApi = apiSlice.injectEndpoints({
  endpoints: (build) => ({
    getAllListing: build.query({
      query: () => ({
        url: "/listing",
        method: "GET",
      }),
    }),
    getDetailListing: build.query({
      query: (slug: string) => ({
        url: `/listing/${slug}`,
        method: "GET",
      })
    })
  }),
});

export const { useGetAllListingQuery,useGetDetailListingQuery } = listingApi;
