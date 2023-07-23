import { Outlet } from "react-router-dom";
import NavBar from "../navbar/Navbar";

const LayoutPublic = ()=>{
    return(
        <>
        <NavBar/>
        <main className="container">
            <Outlet/>
        </main>
        <footer className="container text-center">
            footer
        </footer>
        </>
    );
};
export default LayoutPublic;