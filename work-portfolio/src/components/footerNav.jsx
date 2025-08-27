//React icons
import { FaGithub } from "react-icons/fa";
import { FaLinkedin } from "react-icons/fa";
import { BiLogoGmail } from "react-icons/bi";
import { FaCodepen } from "react-icons/fa";

import "./footerNav.css"; //Custom css
function FooterNavigation() {
  return (
    <div className="socialContainer">
      <ul className="list-unstyled d-flex justify-content-center align-items-center gap-3">
        <li>
          <a
            href="https://github.com/Daniel1000c"
            target="_blank"
            rel="noreferrer"
          >
            <FaGithub />
          </a>
        </li>
        <li>
          <a
            href="https://www.linkedin.com/in/daniel-velez-b17748286/"
            target="_blank"
            rel="noreferrer"
          >
            <FaLinkedin />
          </a>
        </li>
        <li>
          <a href="mailto:velezdaniel6162@gmail.com" rel="noreferrer">
            <BiLogoGmail />
          </a>
        </li>
        <li>
          <a
            href="https://codepen.io/Daniel-Velez-the-looper"
            target="_blank"
            rel="noreferrer"
          >
            <FaCodepen />
          </a>
        </li>
      </ul>
    </div>
  );
}

export default FooterNavigation;
