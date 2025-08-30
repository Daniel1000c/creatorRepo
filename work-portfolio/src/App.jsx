import React from "react";
import {
  BrowserRouter as Router,
  Routes,
  Route,
  BrowserRouter,
} from "react-router-dom";
import Home from "./pages/Home"; // Home page
import PageNotFound from "./pages/pageNotFound"; // 404 Page
function App() {
  return (
    <>
      <BrowserRouter>
        <Routes>
          {/*Home Page Route */}
          <Route index element={<Home />} />

          {/*404 Page Route */}
          <Route path="*" element={<PageNotFound />} />
        </Routes>
      </BrowserRouter>
    </>
  );
}

export default App;
