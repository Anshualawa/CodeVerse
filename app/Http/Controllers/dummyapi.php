<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use Validator;

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

    function testData(Request $request)
    {
        $rules = array(
            'name' => 'required|min:8|max:15'
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 401);
        } else {
            $device = new Device;
            $device->name = $request->name;
            $result = $device->save();
            if ($result) {

                return [
                    'Result' => 'Data has been saved',
                    'statu code ' => 200
                ];
            } else {

                return [
                    'Result' => 'Operation failed',
                    'Status' => 500
                ];
            }
        }
    }
}