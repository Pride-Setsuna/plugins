<?php
/*
Plugin Name: UPODHA
Plugin URI: http://your_plugin_uri_here
Description: This plugin receives and processes information from the Tuya door sensor, then sends commands to Home Assistant to control the Google smart light and Amazon Alexa device.
Version: 1.0
Author: Xinzhe.Gao
Author URI: http://your_author_uri_here
*/

function upodha_smart_home_page() {
    // Fetch the device status from the API
    // $door_sensor_status = fetch_door_sensor_status();
    // $google_light_status = fetch_google_light_status();

    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>UPODHA</title>
        <style>
            body {font-family: Arial, sans-serif; background-color: #f4f4f4; color: #333;}
            .container {width: 80%; margin: 0 auto; background-color: #fff; padding: 20px; border-radius: 5px;}
            h1 {text-align: center; color: #5D6975;}
            h2 {margin-top: 30px; color: #5D6975;}
            p, li {line-height: 1.6;}
            a {color: #007BFF; text-decoration: none;}
            a:hover {color: #0056b3;}
            button {background-color: #007BFF; border: none; color: white; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 10px 2px; cursor: pointer; border-radius: 5px;}
            button:hover {background-color: #0056b3;}
            input[type=text], select {width: 30%; /* update this line */ padding: 1px 1px; margin: 1px 0; display: inline-block; border: 1px solid #ccc; border-radius: 1px; box-sizing: border-box;}
            .new-dropdown-section {margin-top: 30px;}
            .new-dropdown-section button {margin-top: 10px;}
            .flex-sl {display: flex; flex-direction: row; flex-wrap: wrap; justify-content: space-between; align-items: baseline;}
            .box-size {width: 50%;} 
        </style>


    </head>
    <body>
        <div class="container">
            <h1>UPODHA</h1>
            
            <!-- <h2>Homeassistant Settings</h2> -->
            
            <!-- Add your settings or configuration options here -->
            <form class="flex-sl">
                <div class="box-size">
                    <h2>Homeassistant Settings</h2>
                    <label for="api_key">Home Assistant Base URL:</label><br>
                    <input type="text" id="Base URL" name="Base URL"><br>
                    <label for="api_key">Home Assistant API Key:</label><br>
                    <input type="text" id="api_key" name="api_key"><br>
                    <label for="api_key">Device Settings:</label><br>

                    <div><button type="button">Save Changes</button></div>
                
                    <h2>Device Settings</h2>

                    <label for="api_key">Device Name:</label><br>
                    <input type="text" id="Settings" name="Settings"><br>

                    <label for="api_key">Device ID:</label><br>
                    <input type="text" id="Settings" name="Settings"><br>

                    <label for="api_key">Device Name:</label><br>
                    <input type="text" id="Settings" name="Settings"><br>

                    <label for="api_key">Device ID:</label><br>
                    <input type="text" id="Settings" name="Settings"><br>

                    <label for="api_key">Device Name:</label><br>
                    <input type="text" id="Settings" name="Settings"><br>

                    <label for="api_key">Device ID:</label><br>
                    <input type="text" id="Settings" name="Settings"><br>

                    <button type="button">Add Action</button>

                    <div><button type="button">Save Changes</button></div>
                </div>
                <!-- Add new dropdown sections here -->
                <div class="box-size">
                    <h2>Trigger Condition Settings</h2>
                    <div class="new-dropdown-section">
                        <label for="new_dropdown1">if:</label><br>
                        <select id="new_dropdown1" name="new_dropdown1">
                            <option value="option1">Device 3  is triggered</option>
                            <option value="option2">Device 3  is triggered</option>
                        </select><br>
                        <button type="button">Add Condition</button>
                    </div>
                
                    <div class="new-dropdown-section">
                        <label for="new_dropdown2">Then:</label><br>
                        <select id="new_dropdown2" name="new_dropdown2">
                            <option value="option1">Device 4 turns on</option>
                            <option value="option2">Option 4 </option>
                        </select>
                        <select id="new_dropdown2" name="new_dropdown2">
                            <option value="option1">Device 5 turns on</option>
                            <option value="option2">Option 5</option>
                        </select><br>
                        <button type="button">Add Action</button>
                    </div>

                    <div class="new-dropdown-section">
                        <label for="new_dropdown3">Else:</label><br>
                        <select id="new_dropdown3" name="new_dropdown3">
                            <option value="option1"></option>
                            <option value="option2"></option>
                        </select><br>
                        <button type="button">Add Action</button>
                    </div>

                    <div><button type="button">Save Changes</button></div>
                </div>
            </form>

        </div>
    </body>
    </html>
    <?php
}

// Add a new page in the WordPress admin menu
function add_upodha_smart_home_page() {
    add_menu_page(
        'UPODHA',
        'UPODHA',
        'manage_options',
        'upodha-smart-home',
        'upodha_smart_home_page'
    );
}

add_action('admin_menu', 'add_upodha_smart_home_page');