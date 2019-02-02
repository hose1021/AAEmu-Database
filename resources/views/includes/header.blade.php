<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('img/logo.png') }}" alt="AAWeb">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <div class="btn-group">
                <a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary dropdown-toggle"
                   href="">
                    Database
                </a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                    <li class="dropdown-submenu">
                        <a class="dropdown-item" tabindex="-1" href="{{route('all_items')}}">
                            Item
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" tabindex="-1" href="#">
                                    Weapons
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item" tabindex="-1" href="#">
                                            1H Weapon
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" id="69">Dagger</a></li>
                                            <li><a class="dropdown-item" id="70">Sword</a></li>
                                            <li><a class="dropdown-item" id="72">Katana</a></li>
                                            <li><a class="dropdown-item" id="73">Axe</a></li>
                                            <li><a class="dropdown-item" id="74">Club</a></li>
                                            <li><a class="dropdown-item" id="75">Scepter</a></li>
                                            <li><a class="dropdown-item" id="76">Shortspear</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item" tabindex="-1" href="#">
                                            2H Weapon
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" tabindex="-1" id="127">Greatsword</a></li>
                                            <li><a class="dropdown-item" id="128">Nodachi</a></li>
                                            <li><a class="dropdown-item" id="129">Greataxe</a></li>
                                            <li><a class="dropdown-item" id="130">Greatclub</a></li>
                                            <li><a class="dropdown-item" id="131">Staff</a></li>
                                            <li><a class="dropdown-item" id="132">Longspear</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item" tabindex="-1" href="#">
                                            Instruments
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" tabindex="-1" href="#">Lute</a></li>
                                            <li><a class="dropdown-item" href="#">Flute</a></li>
                                            <li><a class="dropdown-item" href="#">Drum</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Bow</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" tabindex="-1" href="#">
                                    Armor
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item" tabindex="-1" href="#">
                                            Cloth
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" tabindex="-1" href="#">Head</a></li>
                                            <li><a class="dropdown-item" href="#">Chest</a></li>
                                            <li><a class="dropdown-item" href="#">Waist</a></li>
                                            <li><a class="dropdown-item" href="#">Wrists</a></li>
                                            <li><a class="dropdown-item" href="#">Hands</a></li>
                                            <li><a class="dropdown-item" href="#">Legs</a></li>
                                            <li><a class="dropdown-item" href="#">Feet</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item" tabindex="-1" href="#">
                                            Leather
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" tabindex="-1" href="#">Head</a></li>
                                            <li><a class="dropdown-item" href="#">Chest</a></li>
                                            <li><a class="dropdown-item" href="#">Waist</a></li>
                                            <li><a class="dropdown-item" href="#">Wrists</a></li>
                                            <li><a class="dropdown-item" href="#">Hands</a></li>
                                            <li><a class="dropdown-item" href="#">Legs</a></li>
                                            <li><a class="dropdown-item" href="#">Feet</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item" tabindex="-1" href="#">
                                            Plate
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" tabindex="-1" href="#">Head</a></li>
                                            <li><a class="dropdown-item" href="#">Chest</a></li>
                                            <li><a class="dropdown-item" href="#">Waist</a></li>
                                            <li><a class="dropdown-item" href="#">Wrists</a></li>
                                            <li><a class="dropdown-item" href="#">Hands</a></li>
                                            <li><a class="dropdown-item" href="#">Legs</a></li>
                                            <li><a class="dropdown-item" href="#">Feet</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Cloak</a></li>
                                    <li><a class="dropdown-item" href="#">Shield</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" tabindex="-1" href="#">
                                    Accessories
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" tabindex="-1" href="#">Earrings</a></li>
                                    <li><a class="dropdown-item" href="#">Necklace</a></li>
                                    <li><a class="dropdown-item" href="#">Ring</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="#">Costume</a></li>
                            <hr>
                            <li><a class="dropdown-item" href="#">Item sets</a></li>
                            <hr>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" tabindex="-1" href="#">
                                    Consumables
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" tabindex="-1" href="#">Consumables</a></li>
                                    <li><a class="dropdown-item" href="#">Food</a></li>
                                    <li><a class="dropdown-item" href="#">Drink</a></li>
                                    <li><a class="dropdown-item" href="#">Materials</a></li>
                                    <li><a class="dropdown-item" href="#">Siege Gear</a></li>
                                    <li><a class="dropdown-item" href="#">Explosive</a></li>
                                    <li><a class="dropdown-item" href="#">Lunastone</a></li>
                                    <li><a class="dropdown-item" href="#">Lunagem</a></li>
                                    <li><a class="dropdown-item" href="#">Buildings</a></li>
                                    <li><a class="dropdown-item" href="#">Talisman</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" tabindex="-1" href="#">
                                    Materials
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item" tabindex="-1" href="#">
                                            Regal Ore
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" tabindex="-1" href="#">Ore</a></li>
                                            <li><a class="dropdown-item" href="#">Hardwood</a></li>
                                            <li><a class="dropdown-item" href="#">Stone Brick</a></li>
                                            <li><a class="dropdown-item" href="#">Pelt</a></li>
                                            <li><a class="dropdown-item" href="#">Textile</a></li>
                                            <li><a class="dropdown-item" href="#">Part</a></li>
                                            <li><a class="dropdown-item" href="#">Meat</a></li>
                                            <li><a class="dropdown-item" href="#">Seafood</a></li>
                                            <li><a class="dropdown-item" href="#">Grain</a></li>
                                            <li><a class="dropdown-item" href="#">Vegetable</a></li>
                                            <li><a class="dropdown-item" href="#">Fruit</a></li>
                                            <li><a class="dropdown-item" href="#">Spice</a></li>
                                            <li><a class="dropdown-item" href="#">Herb</a></li>
                                            <li><a class="dropdown-item" href="#">Flower</a></li>
                                            <li><a class="dropdown-item" href="#">Soil</a></li>
                                            <li><a class="dropdown-item" href="#">Gems</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item" tabindex="-1" href="#">
                                            Materials
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" tabindex="-1" href="#">Paper</a></li>
                                            <li><a class="dropdown-item" href="#">Metal</a></li>
                                            <li><a class="dropdown-item" href="#">Lumber</a></li>
                                            <li><a class="dropdown-item" href="#">Stone Brick</a></li>
                                            <li><a class="dropdown-item" href="#">Hide</a></li>
                                            <li><a class="dropdown-item" href="#">Fabric</a></li>
                                            <li><a class="dropdown-item" href="#">Machining</a></li>
                                            <li><a class="dropdown-item" href="#">Glass</a></li>
                                            <li><a class="dropdown-item" href="#">Rubber</a></li>
                                            <li><a class="dropdown-item" href="#">Precious Metal</a></li>
                                            <li><a class="dropdown-item" href="#">Crafting</a></li>
                                            <li><a class="dropdown-item" href="#">Cooking Oil</a></li>
                                            <li><a class="dropdown-item" href="#">Spices</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Animals</a></li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item" tabindex="-1" href="#">
                                            Plants
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" tabindex="-1" href="#">Saplings</a></li>
                                            <li><a class="dropdown-item" href="#">Seed</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Furniture</a></li>
                                    <li><a class="dropdown-item" href="#">Books</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="#">Transportation</a></li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" tabindex="-1" href="#">
                                    Battle Pets
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" tabindex="-1" href="#">Battle Pets</a></li>
                                    <li><a class="dropdown-item" href="#">Pet Gear</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" tabindex="-1" href="#">
                                    Toy
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" tabindex="-1" href="#">Adventure</a></li>
                                    <li><a class="dropdown-item" href="#">Coins</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a class="dropdown-item" href="#">Title</a></li>
                </ul>
            </div>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a href="/" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('all_items') }}" class="nav-link">Items</a>
                </li>
                <li class="nav-item">
                    <a href="/npcs/all" class="nav-link">Npcs</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
