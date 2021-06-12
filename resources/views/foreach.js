<tr>
@foreach(Session::get('ProductNames') as $p)
<td>{{$p[0]}}</td>

<td>{{$p[1]}}</td>

<td>{{$p[2]}}</td>
<td>{{$p[3]}}</td>
<!-- <td>{{$p[4]}}</td> -->
<td>{{$p[5]}}</td>
    <!-- <td>{{ Session::get('quantity')}}</td>
    <td>{{ Session::get('UnitPrice')}}</td>
    <td>{{ Session::get('tax')}}</td>
    <td>{{ Session::get('total')}}</td> -->
    <!-- PID,$productName,$qty,$unitPrice,$tax,$Pt) -->

</tr>
@endforeach