<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="latihan.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <title>ADMIN</title>
</head>

<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <!--<img src="logo.png" alt="">-->
                </span>

                <div class="text logo-text">
                    <span class="name">ADMIN</span>
                    <span class="profession">Penjualan</span>
                </div>
            </div>

            <i class='bi bi-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bi bi-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="#">
                            <i class='bi bi-house-door icon'></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bi bi-cash-coin icon'></i>
                            <span class="text nav-text">Revenue</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bi-cash-coin icon'></i>
                            <span class="text nav-text">Notifications</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bi bi-graph-up-arrow icon'></i>
                            <span class="text nav-text">Analytics</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bi bi-hand-thumbs-up icon'></i>
                            <span class="text nav-text">Likes</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bi bi-wallet2 icon'></i>
                            <span class="text nav-text">Wallets</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <i class='bi bi-box-arrow-left icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bi bi-moon icon moon'></i>
                        <i class='bi bi-brightness-high icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>

            </div>
        </div>

    </nav>

    <section>
        <h1 style="text-align: center">INI JUDUL</h1>
        <article class="text">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et sapiente hic ab corrupti exercitationem,
                sequi
                quisquam esse harum voluptatum deleniti necessitatibus laboriosam illum vel dolores voluptate! Est autem
                debitis cum distinctio repellat deleniti sequi, doloremque quam rerum laudantium consectetur. Laudantium
                dicta, accusantium totam suscipit aperiam quod libero harum minus omnis facilis. Porro, pariatur nulla,
                ratione commodi quisquam eos tempora quos laboriosam velit fuga repellat blanditiis veniam distinctio
                aperiam expedita autem sit architecto id aut officia consectetur quaerat magni quod laudantium!
                Accusantium
                quod sed nam ea totam eligendi distinctio repellendus consequuntur, necessitatibus dicta consequatur
                sapiente reiciendis, iusto recusandae et aperiam? Labore.</p>
            <br>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel nesciunt magni autem ipsa optio aliquid
                molestias maxime repudiandae. Repellat tenetur, dicta quam dolorem error asperiores optio blanditiis
                quae.
                Maiores ipsam omnis quis harum dolor numquam nisi iusto rerum est magni tempora quaerat maxime nemo quia
                natus alias vero vitae aut in autem eligendi inventore adipisci, minus qui. Nihil reiciendis atque
                dolore
                vel velit maxime voluptatum explicabo. Cumque, itaque necessitatibus facere optio, vel ab corrupti ad
                quia
                illo dolor ea molestiae aut laudantium voluptatem, eum tempore? Explicabo magni suscipit ipsum sint
                vero! Debitis numquam laborum repellat totam odit quos dolores architecto.</p>
            <br>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex quibusdam voluptas harum sequi. Optio magni
                asperiores officia amet perspiciatis quisquam iure repudiandae ipsam voluptas omnis, laboriosam quas
                accusantium voluptatum, eligendi voluptates fugit exercitationem id debitis eos molestias. Officiis
                veniam
                temporibus aliquam cum quidem libero deserunt sed? Obcaecati iste non repellat.</p>


        </article>
    </section>


    <script>
        const body = document.querySelector('body'),
            sidebar = body.querySelector('nav'),
            toggle = body.querySelector(".toggle"),
            searchBtn = body.querySelector(".search-box"),
            modeSwitch = body.querySelector(".toggle-switch"),
            modeText = body.querySelector(".mode-text");


        toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        })

        searchBtn.addEventListener("click", () => {
            sidebar.classList.remove("close");
        })

        modeSwitch.addEventListener("click", () => {
            body.classList.toggle("dark");

            if (body.classList.contains("dark")) {
                modeText.innerText = "Light mode";
            } else {
                modeText.innerText = "Dark mode";

            }
        });
    </script>
</body>

</html>
