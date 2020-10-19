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
  <a href="wedo_show">Back </a><br /><br />
      <form method="post" action="../wedo_update/{{$wedoArr->id}}">
  
    {{csrf_field()}}  



      

                <table id="customers">
       
                    <tr>
                      
                      <td>Name</td>

                      <td><input type="textname" name="name" required value="{{$wedoArr->name}}"/></td>

                    </tr>

                    <tr>
                      <td></td>
                      <td><input type="submit" name="submit"></td>
                    </tr>
                </table>
            </form>

                </div>

               
        </div>
    </body>
</html>
