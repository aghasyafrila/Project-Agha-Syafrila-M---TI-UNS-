import React from "react";
import ReactDOM from "react-dom/client";
import { BrowserRouter as Router, Routes, Route } from "react-router-dom";
import Login from "./login";
import Dashboard from "./dashboard";
import Sidebar from "./sidebar/sidebar";
import Editprofile from "./page/Editprofile/Editprofile";

function App() {
    return (
        <Router>
            <Routes>
                <Route path="/" element={<Login />} />
               
                <Route path="/dashboard" element={<Sidebar />}>
                    <Route path="" element={<Dashboard />} />
                    <Route path="editprofile" element={<Editprofile />} />

                </Route>
                <Route path="/coba" element={<Dashboard />} />
            </Routes>
        </Router>


    );
}

const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(<App />);
