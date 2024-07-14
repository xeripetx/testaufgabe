<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class CopyrightController extends Controller
{
    const HEADER = "
.-----. _            .-----.                .-----.
`-. .-':_;           `-. .-'                `-. .-'
  : :  .-. .--.  _____ : : .--.   .--.  _____ : : .--.  .--.
  : :  : :'  ..':_____:: :' .; ; '  ..':_____:: :' .; :' '_.'
  :_;  :_;`.__.'       :_;`.__,_;`.__.'       :_;`.__.'`.__.'
        ";

    // Generated with  https://patorjk.com/software/taag/
    const COPYRIGHT = "
___.           ___________      .__         __________        __               .__       .___
\_ |__ ___.__. \_   _____/______|__| ____   \______   \ _____/  |_____________ |  |    __| _/
 | __ <   |  |  |    __)_\_  __ \  |/ ___\   |     ___// __ \   __\___   /  _ \|  |   / __ | 
 | \_\ \___  |  |        \|  | \/  \  \___   |    |   \  ___/|  |  /    (  <_> )  |__/ /_/ | 
 |___  / ____| /_______  /|__|  |__|\___  >  |____|    \___  >__| /_____ \____/|____/\____ | 
     \/\/              \/               \/                 \/           \/                \/";

    static public function getCopyright(): string
    {
        return self::HEADER . self::COPYRIGHT;
    }

    static public function showCopyright(): Response
    {
        return response( self::getCopyright() )->header('Content-Type', 'text/plain');
    }
}
