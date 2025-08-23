import FooterNavigation from "./footerNav"; //Footer social media navigation

function Footer() {
  return (
    <footer className="p-1 text-center">
      <div className="container">
        <hr />
        <FooterNavigation />
        <p>Copyright &copy; {new Date().getFullYear()} Daniel Velez</p>
      </div>
    </footer>
  );
}

export default Footer;
