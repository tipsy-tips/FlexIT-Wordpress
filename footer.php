    <!-- FOOTER START-->
    <footer class="footer">
      <div class="overlay"></div>
      <div class="container">
        <div class="footer__wrapper">
          <div class="logo-p">
            <img src="./images/logo-colored.png" alt="" />
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius aut
              dolores autem quos mollitia! Amet tenetur consectetur iure
              sapiente nisi debitis cum officia rerum, ullam impedit laboriosam
              aspernatur cumque maiores.
            </p>
            <div class="form__block">
              <form class="one-field-form" method="post" action="#0">
                <div class="field-group">
                  <label class="email-label" for="email-input">
                    Subscribe to our news letter</label
                  >
                  <input
                    class="email-input"
                    type="email"
                    value=""
                    name="EMAIL"
                    id="email-input"
                    placeholder="Email Address"
                    autocomplete="off"
                  />
                  <div class="cta-area">
                    <input
                      class="btn-solid subscribe-btn"
                      type="submit"
                      value="Subscribe"
                      name="subscribe"
                    />
                  </div>
                </div>
                <span class="email-notice"
                  >*we will not share your personal info</span
                >
              </form>
            </div>
          </div>

          <div class="links__block__wrapper">
            <div class="links__block">
              <h2 class="links-title">useful links</h2>
              <div class="links-wrapper">
                <ul class="links-menu">
                  <li class="links-menu-item">
                    <i class="fa fa-arrow-right"></i
                    ><a class="links-menu-link" href="#0">Google</a>
                  </li>
                  <li class="links-menu-item">
                    <i class="fa fa-arrow-right"></i
                    ><a class="links-menu-link" href="#0">Dribbble</a>
                  </li>
                  <li class="links-menu-item">
                    <i class="fa fa-arrow-right"></i
                    ><a class="links-menu-link" href="#0">linkedIn</a>
                  </li>
                  <li class="links-menu-item">
                    <i class="fa fa-arrow-right"></i
                    ><a class="links-menu-link" href="#0">wikipedia</a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="links__block">
              <h2 class="links-title">Resources</h2>
              <div class="links-wrapper">
                <ul class="links-menu">
                  <li class="links-menu-item">
                    <i class="fa fa-arrow-right"></i
                    ><a class="links-menu-link" href="#0">Support</a>
                  </li>
                  <li class="links-menu-item">
                    <i class="fa fa-arrow-right"></i
                    ><a class="links-menu-link" href="#0">Dashboard</a>
                  </li>
                  <li class="links-menu-item">
                    <i class="fa fa-arrow-right"></i
                    ><a class="links-menu-link" href="#0">Drivers</a>
                  </li>
                  <li class="links-menu-item">
                    <i class="fa fa-arrow-right"></i
                    ><a class="links-menu-link" href="#0">Projects</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="contact__block">
            <h2 class="contact-title">contact information</h2>
            <div class="contact-wrapper">
              <div class="contact-info-card">
                <i class="fa-regular fa-envelope"> </i
                ><a href="">example@support.com</a>
              </div>
              <div class="contact-info-card">
                <i class="fa-regular fa-map"></i>
                <span>5 Xyz st., Abc, alexandria, egypt.</span>
              </div>
              <div class="contact-info-card">
                <i class="fa fa-mobile-screen"></i>
                <a>+20123456789</a>
              </div>
              <div class="social-icons">
                <div class="sc-wrapper">
                  <ul class="sc-list">
                    <li class="sc-item">
                      <a class="sc-link" href="#0">
                        <i class="fab fa-facebook-f sc-icon"></i>
                      </a>
                    </li>
                    <li class="sc-item">
                      <a class="sc-link" href="#0">
                        <i class="fab fa-youtube sc-icon"></i>
                      </a>
                    </li>
                    <li class="sc-item">
                      <a class="sc-link" href="#0">
                        <i class="fab fa-instagram sc-icon"></i>
                      </a>
                    </li>
                    <li class="sc-item">
                      <a class="sc-link" href="#0">
                        <i class="fab fa-twitter sc-icon"> </i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights">
        <div class="container">
          <div class="copyrights__wrapper">
            <div class="created">
              <p class="creadits">
                © 2023 Created by:

                <a class="link" href="#0">amin-themes</a>
              </p>
            </div>
            <div class="terms">
              <div class="terms-links">
                <a href="#0">Terms of Use </a> |
                <a
                  href="#0"
                  data-bs-toggle="modal"
                  data-bs-target="#privacyPolicyModal"
                  >Privacy Policy.</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- FOOTER END -->

    <!-- Button for Top Going -->
    <div id="topbtn" class="topbtn">
      <a href="#top">
        <img src="wp-content\themes\Flex IT\dist\images\arrow-up.svg" alt="" />
      </a>
    </div>
    
    <?php wp_footer() ?>

    <!-- Script for Portfolio -->
    <script>
      filterObjects("all");

      function filterObjects(c) {
        var x, i;
        x = document.getElementsByClassName("portfolio__cards");
        if (c == "all") c = "";
        for (i = 0; i < x.length; i++) {
          removeClass(x[i], "show");
          if (c === "" || x[i].className.indexOf(c) > -1) {
            addClass(x[i], "show");
            x[i].style.transform = "scale(1)"; // Set scale to 1 when showing
          } else {
            x[i].style.transform = "scale(0)"; // Set scale to 0 when hiding
          }
        }
      }

      function addClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
          if (arr1.indexOf(arr2[i]) == -1) {
            element.className += " " + arr2[i];
          }
        }
      }

      function removeClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
          while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);
          }
        }
        element.className = arr1.join(" ");
      }

      var links = document.querySelectorAll(".portfolio_btn a");
      links.forEach(function (link) {
        link.addEventListener("click", function () {
          // Remove "active" class from all links
          links.forEach(function (otherLink) {
            removeClass(otherLink, "active");
          });
          // Add "active" class to the clicked link
          addClass(link, "active");
        });
      });
    </script>

    <!-- Script for Counting Numbers -->
    <script>
      $(document).ready(function () {
        $(".counter").counterUp({
          delay: 10,
          time: 1200,
        });
      });
    </script>

    <!-- Script for Toggle -->
    <script>
      const searchBTN = document.querySelector(".search__btn");
      const searchContainer = document.querySelector(".header-search-box");
      const close = document.querySelector(".close-search");
      searchBTN.addEventListener("click", () => {
        searchBTN.classList.toggle("show");
        searchContainer.classList.toggle("show");
      });
      close.addEventListener("click", () => {
        searchBTN.classList.remove("show");
        searchContainer.classList.remove("show");
      });

      const burgerbtn = document.querySelector(".burger__menu");
      const headerA = document.querySelector("nav");
      burgerbtn.addEventListener("click", () => {
        burgerbtn.classList.toggle("open");
        headerA.classList.toggle("open");
      });
    </script>

    <script>
      const toggleMenu = document.querySelector("#toggleMode");
      const menu = document.querySelector("#menu");
      const body = document.querySelector("body");

      const icon = document.querySelector(".far");
      const logo = document.querySelector("#logo");

      toggleMenu.addEventListener("click", () => {
        menu.classList.toggle("open");
        body.classList.toggle("open");
      });

      // Script for dark and light mode
      const btnTheme = document.querySelector(".theme");
      const root = document.querySelector(":root");

      btnTheme.addEventListener("click", () => {
        if (body.classList.contains("dark")) {
          body.classList.remove("dark");
          root.style.setProperty("--light", "#fff");
          root.style.setProperty("--dark", "#1f1f1f");
          root.style.setProperty("--accent", "#062241");
          root.style.setProperty("--secondary", "#060922");
          icon.classList.remove("fa-moon");
          icon.classList.add("fa-sun");
          logo.src = "./images/logo-light.png";
        } else {
          body.classList.add("dark");
          root.style.setProperty("--light", "#1f1f1f");
          root.style.setProperty("--dark", "#fff");
          root.style.setProperty("--secondary", "#fff");
          root.style.setProperty("--accent", "#daf3fd");
          icon.classList.remove("fa-sun");
          icon.classList.add("fa-moon");
          logo.src = "./images/logo-dark.png";
        }
      });
    </script>

    <!-- Script for Button Going up -->
    <script>
      let anchorTop = document.getElementById("topbtn");
      let header = document.getElementById("header");

      window.onscroll = function () {
        scrollFunction();
      };

      function scrollFunction() {
        if (
          document.body.scrollTop > 20 ||
          document.documentElement.scrollTop > 20
        ) {
          header.classList.add("sticky");
          anchorTop.style.opacity = "100%";
        } else {
          header.classList.remove("sticky");
          anchorTop.style.opacity = "0%";
        }
      }
    </script>
  </body>
</html>