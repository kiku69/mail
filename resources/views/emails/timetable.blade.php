<x-mail::message>
    <div style="font-family: Arial, sans-serif; color: #333;">
        <h1 style="font-size: 24px; color: #007bff;">Your Timetable</h1>

        @foreach ($data as $date => $events)  <!-- First loop for days -->
            <div style="margin-bottom: 20px;">
                <h2 style="font-size: 20px; color: #333;">{{ $date }}</h2>  <!-- Display the date -->

                <ul style="list-style: none; padding: 0;">
                    @foreach ($events as $event)  <!-- Second loop for each event on the day -->
                        <li style="background-color: #f9f9f9; border-radius: 4px; padding: 10px; margin-bottom: 10px; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
                            <strong style="font-size: 16px;">{{ $event['name'] }}</strong>
                            <br>
                            <span style="font-size: 14px;">Room: {{ $event['room'] }}</span>
                            <br>
                            <span style="font-size: 14px;">Teacher: {{ $event['teacher'] }}</span>
                            <br>
                            <span style="font-size: 14px;">Time: {{ $event['time_start'] }} - {{ $event['time_end'] }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endforeach

        <p style="font-size: 14px; color: #888;">If you have any questions, feel free to contact us.</p>
        <p style="font-size: 14px; color: #888;">Thanks, <br> {{ config('app.name') }}</p>
    </div>
</x-mail::message>
