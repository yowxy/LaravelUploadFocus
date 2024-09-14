import { store } from "@/lib/store";
import { Children } from "react";
import { Provider } from "react-redux";

function ReduxProvider({children}: {children :React.ReactNode} ){
     return <Provider store= {store} >
        {children}
     </Provider>;
} 

export default ReduxProvider;