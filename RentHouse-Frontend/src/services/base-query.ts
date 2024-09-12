import { fetchBaseQuery} from '@reduxjs/toolkit/query'
import {createApi} from '@reduxjs/toolkit/query/react'

const BaseQuery = fetchBaseQuery({
    baseUrl: process.env.NEXT_PUBLIC_API_BASE_URL,
    prepareHeaders: async (headers) => {
        headers.set("Accept","application/json");
        return headers;
    },
});

export const apiSlice = createApi({
    baseQuery: BaseQuery,
    endpoints:  ()=> ({}),
})
