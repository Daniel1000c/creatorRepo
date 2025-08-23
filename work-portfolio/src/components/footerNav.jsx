//React icons
import { FaGithub } from "react-icons/fa";
import { FaLinkedin } from "react-icons/fa";
import { BiLogoGmail } from "react-icons/bi";
import { FaCodepen } from "react-icons/fa";
function FooterNavigation() {
  return (
    <div className="socialContainer">
      <ul className="list-unstyled d-flex justify-content-center align-items-center gap-3">
        <li>
          <a href="">
            <FaGithub />
          </a>
        </li>
        <li>
          <a href="">
            <FaLinkedin />
          </a>
        </li>
        <li>
          <a href="">
            <BiLogoGmail />
          </a>
        </li>
        <li>
          <a href="">
            <FaCodepen />
          </a>
        </li>
      </ul>
    </div>
  );
}

export default FooterNavigation;
