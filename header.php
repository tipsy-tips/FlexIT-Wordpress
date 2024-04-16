<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Flex IT</title>
    <?php wp_head()?>
  </head>
  <body>
    <a id="top"></a>
    <!-- HEADER -->
    <header id="header" class="header">
      <div class="header-search-box">
        <div class="close-search"></div>
        <form
          class="nav-search search-form"
          role="search"
          method="get"
          action="#"
        >
          <div class="search-wrapper">
            <label class="search-lbl">Search for:</label>
            <input
              class="search-input"
              type="search"
              placeholder="Search..."
              name="searchInput"
              autofocus="autofocus"
            />
            <button class="search-btn" type="submit">
              <i class="fa-solid fa-magnifying-glass"></i>
            </button>
          </div>
        </form>
      </div>
      <div class="container">
        <div class="header__wrapper">
          <div class="logo">
            <a href="#"
              ><img id="logo" class="light-logo" src="wp-content/uploads/2024/04/logo-light.png"
            /></a>
          </div>
          <nav class="">
            <ul class="nav-links">
              <li class="dropdown-parent">
                <input id="drop1" type="checkbox" name="menu" />
                <label class="active" for="drop1"
                  >Home <i class="fa-solid fa-plus"></i>
                  <ul class="submenu">
                    <li><a href="#">Home 1</a></li>
                    <li><a href="#">Home 2</a></li>
                    <li><a href="#">Home 3 [Slider Style 1]</a></li>
                    <li><a href="#">Home 4 [Slider Style 2]</a></li>
                    <li><a href="#">Home [RTL Language]</a></li>
                  </ul>
                </label>
              </li>
              <li class="dropdown-parent">
                <input id="drop0" type="checkbox" name="menu" />
                <label for="drop0">About Us</label>
                <ul class="submenu"></ul>
              </li>

              <li class="dropdown-parent">
                <input id="drop3" type="checkbox" name="menu" />
                <label for="drop3"
                  >Services <i class="fa-solid fa-plus"></i>
                  <ul class="submenu">
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Single</a></li>
                  </ul>
                </label>
              </li>
              <li class="dropdown-parent">
                <input id="drop4" type="checkbox" name="menu" />
                <label for="drop4"
                  >Portfolio <i class="fa-solid fa-plus"></i>
                  <ul class="submenu">
                    <li><a href="#">Portfolio Grid</a></li>
                    <li><a href="#">Portfolio Slider</a></li>
                    <li><a href="#">Portfolio Single</a></li>
                  </ul>
                </label>
              </li>
              <li class="dropdown-parent">
                <input id="drop5" type="checkbox" name="menu" />
                <label for="drop5"
                  >Blog <i class="fa-solid fa-plus"></i>
                  <ul class="submenu">
                    <li><a href="#">Blog Home 1 Column</a></li>
                    <li><a href="#">Blog Home 2 Column</a></li>
                    <li><a href="#">Blog Home 3 Column</a></li>
                  </ul>
                </label>
              </li>
              <li class="dropdown-parent">
                <input id="drop6" type="checkbox" name="menu" />
                <label for="drop6"
                  >Pages <i class="fa-solid fa-plus"></i>
                  <ul class="submenu">
                    <li><a href="#">Pricing Plans</a></li>
                    <li><a href="#">Our Team</a></li>
                    <li><a href="team.html">Team Member</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">404 Page</a></li>
                  </ul>
                </label>
              </li>
              <li>
                <label>Contact Us</label>
              </li>
            </ul>
          </nav>

          <div class="nav__controls">
            <div class="burger__menu">
              <span></span>
              <span></span>
              <span></span>
            </div>

            <div class="search__btn">
              <i class="fa-solid fa-magnifying-glass"></i>
            </div>

            <div class="mode__btn">
              <i class="theme far fa-sun" id="toggleMode"></i>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- HEADER END -->