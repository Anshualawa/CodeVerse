<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class dummyapi extends Controller
{
    function getData()
    {
        $data = [
            ['name' => 'alawa', 'email' => 'alawa@gmail.com', 'age' => 23],
            ["name" => "Ram", "email" => "ram@gmail.com", "age" => 23],
            ["name" => "Shyam", "email" => "shyam23@gmail.com", "age" => 28],
            ["name" => "John", "email" => "john@gmail.com", "age" => 33],
            ["name" => "Bob", "email" => "bob32@gmail.com", "age" => 41]
        ];

        return $data;
    }

    function list($id = null)
    {
        return $id ? Device::find($id) : Device::all();
    }

    function add(Request $request)
    {
        $device = new Device;
        $device->name = $request->name;
        $result = $device->save();
        if ($result) {

            return ['result' => 'Data has been saved'];
        } else {

            return ['result' => 'Operation Failed'];
        }
    }

    function update(Request $request)
    {
        $device = Device::find($request->id);
        $device->name = $request->name;
        $result = $device->save();
        if ($result) {

            return ['result' => 'Data has been updated'];
        } else {

            return ['result' => 'Operation Failed'];
        }
    }

    function delete($id)
    {
        $device = Device::find($id);
        $result = $device->delete();
        if ($result) {

            return ['result' => 'recored has been deleted'];
        } else {

            return ['result' => 'Operation Failed'];
        }
    }

    function search($name)
    {

        return Device::where("name", "like", "%" . $name . "%")->get();
    }
}