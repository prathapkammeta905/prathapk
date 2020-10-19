<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Todo Form</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
  <a href="wedo_create">Add Record</a><br /><br />
  
      {{session('msg')}}

                <table id="customers">
                    <tr>
                        
                    <td>Id</td>
                    <td>Name</td>
                    <td>Created At</td>
                    <td>Action</td>
                    </tr>
                              
                              @foreach($wedoArr as $wedo)
                                <tr>
                        
                    <td>{{$wedo->id}}</td>
                    <td>{{$wedo->name}}</td>
                    <td>{{$wedo->created_at}}</td>
                    <td><a href="wedo_delete/{{$wedo->id}}">Delete</a>
                        <a href="wedo_edit/{{$wedo->id}}">Edit</a>
                        
                    </td>
                    </tr>
                    
                              @endforeach           


                </table>


                </div>

               
        </div>
    </body>
</html>
