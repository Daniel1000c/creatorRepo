import "./App.css";
import "bootstrap/dist/css/bootstrap.min.css";
import Header from "./components/header"; //Header component
import Footer from "./components/footer"; //Footer component
import Hero from "./components/hero"; //Hero component
import About from "./components/about"; //About component
import Contact from "./components/contact"; //Contact component
import Portfolio from "./components/portfolio"; //Portfolio component

function App() {
  return (
    <>
      <Header />
      <Hero />
      <About />
      <Portfolio />
      <Contact />
      <Footer />
    </>
  );
}

export default App;
