<x-mail::message>
    @foreach($data->groupBy('date') as $date => $entries)
<h2 class="date-header">{{ $date }}</h2>
<table>
<thead>
<tr>
<th>Name</th>
<th>Room</th>
<th>Teacher</th>
<th>Start Time</th>
<th>End Time</th>
</tr>
</thead>
<tbody>
                @foreach($entries as $entry)
<tr>
<td>{{ $entry['name'] }}</td>
<td>{{ $entry['room'] }}</td>
<td>{{ $entry['teacher'] }}</td>
<td>{{ $entry['time_start'] }}</td>
<td>{{ $entry['time_end'] }}</td>
</tr>
                @endforeach
</tbody>
</table>
    @endforeach
</x-mail::message>

<style>
    .date-header {
        font-size: 24px;
        font-weight: bold;
        margin: 20px 0 10px;
        color: #333;
        font-family: Arial, sans-serif;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        font-family: Arial, sans-serif;
        margin-bottom: 30px;
    }
    th, td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: #f4f4f4;
        font-weight: bold;
    }
</style>
