<?php
/*
Plugin Name: SKILL
Plugin URI: http://your_plugin_uri_here
Description: 
Author: Xinzhe.Gao
Author URI: http://your_author_uri_here
*/

function unique_plugin_smart_home_page() {
    // Fetch the device status from the API
    // $door_sensor_status = fetch_door_sensor_status();
    // $google_light_status = fetch_google_light_status();
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>SKILL</title>
        <style>
            body {font-family: Arial, sans-serif; background-color: #f4f4f4; color: #333; margin: 0; padding: 0;}
            .container {width: 100%; background-color: #fff; border-radius: 5px;}
            h1 {text-align: center; color: #5D6975;}
            h2 {margin-top: 30px; color: #5D6975;}
            p, li {line-height: 1.6;}
            a {color: #007BFF; text-decoration: none;}
            a:hover {color: #0056b3;}
            button {background-color: #007BFF; border: none; color: white; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 10px 2px; cursor: pointer; border-radius: 5px;}
            button:hover {background-color: #0056b3;}
            input[type=text], select {width: 50%; /* update this line */ padding: 1px 1px; margin: 1px 0; display: inline-block; border: 1px solid #ccc; border-radius: 1px; box-sizing: border-box;}
            .new-dropdown-section {margin-top: 30px;}
            .new-dropdown-section button {margin-top: 10px;}
            .flex-container {display: flex;flex-direction: row;justify-content: flex-start; width: 50%;}
            .flex-item-one {width: 46%; }
            .flex-item-two {width: 54%; }
            .device-settings input[type="text"] {width: 100%;max-width: 300px;padding: 1px 1px;margin: 1px 0;display: inline-block;border: 1px solid #ccc;border-radius: 1px;box-sizing: border-box;}
            .head-title {width: 40%; margin-left: 0;}
        </style>
    </head>
    
    
    <body>
        <div class="container">
            <div class="head-title"><h1>SKILL</h1></div>

            <div class="flex-container">
                <div class="flex-item-one">
                    <h2>Device Settings</h2>
                    <div class="device-settings">
                        <label for="api_key">Device Name:</label><br>
                        <input type="text" id="Settings" name="Settings"><br>

                        <label for="api_key">Device ID:</label><br>
                        <input type="text" id="Settings" name="Settings"><br>

                        <label for="api_key">Device Name:</label><br>
                        <input type="text" id="Settings" name="Settings"><br>

                        <label for="api_key">Device ID:</label><br>
                        <input type="text" id="Settings" name="Settings"><br>
                    </div>

                    <button type="button">Add Action</button>
                    <div><button type="button">Save Changes</button></div>
                </div>

                <div class="flex-item-two">
                    <h2>Trigger Condition Settings</h2>
                    <div class="new-dropdown-section">
                        <label for="new_dropdown1">if:</label><br>
                        <select id="new_dropdown1" name="new_dropdown1">
                            <option value="option1">Carbon Dioxide Concentration>1000ppm</option>
                            <option value="option2">Carbon Dioxide Concentration>1000ppm</option>
                        </select><br>
                        <button type="button">Add Condition</button>
                    </div>

                    <div class="new-dropdown-section">
                        <label for="new_dropdown2">Then:</label><br>
                        <select id="new_dropdown2" name="new_dropdown2">
                            <option value="option1">Device 4 turns on</option>
                            <option value="option2">Option 4</option>
                        </select><br>
                        <button type="button">Add Action</button>
                    </div>

                    <div class="new-dropdown-section">
                        <label for="new_dropdown3">Else:</label><br>
                        <select id="new_dropdown3" name="new_dropdown3">
                            <option value="option1">Device4 turns off</option>
                            <option value="option2"></option>
                        </select><br>
                        <button type="button">Add Action</button>
                    </div>

                    <div><button type="button">Save Changes</button></div>
                </div>
            </div>
        </div>
    </body>
    </html>
    <?php
}

function add_unique_plugin_smart_home_page() {
    add_menu_page(
        'SKILL',
        'SKILL',
        'manage_options',
        'upodha-smart-home',
        'unique_plugin_smart_home_page'
    );
}

add_action('admin_menu', 'add_unique_plugin_smart_home_page');
