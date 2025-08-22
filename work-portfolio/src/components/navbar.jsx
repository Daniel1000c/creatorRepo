import Container from "react-bootstrap/Container";
import Nav from "react-bootstrap/Nav";
import Navbar from "react-bootstrap/Navbar";
import { IoIosHome } from "react-icons/io";
import { FaPhoneAlt } from "react-icons/fa";
import { CgProfile } from "react-icons/cg";
import { FaBriefcase } from "react-icons/fa";

function Navigation() {
  return (
    <Navbar expand="lg">
      <Container>
        <Navbar.Brand href="#home">Daniel Velez</Navbar.Brand>
        <Navbar.Toggle aria-controls="basic-navbar-nav" />
        <Navbar.Collapse id="basic-navbar-nav">
          <Nav className="ms-auto">
            <Nav.Link href="#home">
              <IoIosHome />
              Home
            </Nav.Link>
            <Nav.Link href="#link">
              <CgProfile />
              About Me
            </Nav.Link>
            <Nav.Link href="#link">
              <FaBriefcase />
              Portfolio
            </Nav.Link>
            <Nav.Link href="#link">
              <FaPhoneAlt />
              Contact
            </Nav.Link>
          </Nav>
        </Navbar.Collapse>
      </Container>
    </Navbar>
  );
}

export default Navigation;
