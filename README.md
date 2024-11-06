# Wordpress Block Plugin Boilerplate

This plugin is no longer maintained. You can use [Light Wp Plugin Boilerplate](https://github.com/Arkenon/light-wp-plugin-boilerplate) or [[Clean Wp Plugin Boilerplate](https://github.com/Arkenon/clean-wp-plugin-boilerplate)] instad of this plugin.


Plugin boilerplate for Gutenberg blocks developers.

This boilerplate is based on [Wordpress Create Block](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-create-block/)  and [Wordpress Plugin Boilerplate](https://github.com/DevinVinson/WordPress-Plugin-Boilerplate)

## Installation

The Boilerplate can be installed directly into your plugins folder.

Then follow these steps:

* change `plugin_name` to `example_me`
* change `plugin-name` to `example-me`
* change `Plugin_Name` to `Example_Me`
* change `PLUGIN_NAME` to `EXAMPLE_ME`


* Install dependencies `npm i`


* Update packages `npm run packages-update`


* Start plugin `npm start`


* Build for production `npm build`

## How to Register Blocks?

The boilerplate use "/src" folder to create blocks (via @wordpress-scripts package). There is a sample block in "src" folder. You can modify this ore create another custom block.

To register a block:
1) Build your blocks with the "npm run build" command (Make sure your current root is equal to the root of the plugin in the terminal) This command builds all blocks in "src" folder.
2) Go to "inc/class-plugin-name-blocks.php"
3) Register your blocks in the register_plugin_name_blocks() method via the register_block_type() function. To learn more about the Register_block_type() function, visit https://developer.wordpress.org/reference/functions/register_block_type/)

If you want to watch changes in your block you can use 'npm start' command and see the changes immediately.

## Recommended Tools

### i18n Tools

The WordPress Block Plugin Boilerplate uses a variable to store the text domain used when internationalizing strings throughout the Boilerplate. To take advantage of this method, there are tools that are recommended for providing correct, translatable files:

* [Poedit](http://www.poedit.net/)
* [makepot](http://i18n.svn.wordpress.org/tools/trunk/)
* [i18n](https://github.com/grappler/i18n)

Any of the above tools should provide you with the proper tooling to internationalize the plugin.

## License

The WordPress Block Plugin Boilerplate is licensed under the GPL v2 or later.

> This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License, version 2, as published by the Free Software Foundation.

> This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

> You should have received a copy of the GNU General Public License along with this program; if not, write to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA

A copy of the license is included in the root of the plugin’s directory. The file is named `LICENSE`.

## Important Notes

### Licensing

The WordPress Block Plugin Boilerplate is licensed under the GPL v2 or later; however, if you opt to use third-party code that is not compatible with v2, then you may need to switch to using code that is GPL v3 compatible.

For reference, [here's a discussion](http://make.wordpress.org/themes/2013/03/04/licensing-note-apache-and-gpl/) that covers the Apache 2.0 License used by [Bootstrap](http://twitter.github.io/bootstrap/).

# Credits

Created by Kadim Gültekin

* https://github.com/Arkenon
* https://www.linkedin.com/in/kadim-gültekin-86320a198/


