
@props(['runs' => []])
<table>
    <thead>
    <tr>
        <th>Run ID</th>
        <th>Test Name</th>
        <th>Timestamp</th>
        <th>Suite</th>
        <th>Result</th>
        <th>Code</th>
        <th>Error</th>
    </tr>
    </thead>
    <tbody>
    @foreach($runs as $run)
    <tr>
        <td>
            <a href="/sessions/1/test/2/run/{{ $run->id }}">{{ $run->id }}</a>
        </td>
        <td>{{$run->test->title }}</td>
        <td>{{$run->timestamp}}</td>
        <td>{{$run->suite}}</td>
        <td>
            @if ($run->result === "passed")
                <span class="pass">Passed</span>
            @else
                <span class="fail">Failed</span>
            @endif
        </td>
        <td>
            @if ($run->code)
                <a href="#">Show</a>
            @endif
        </td>
        <td>
            @if ($run->error)
                <a href="#">Show</a>
            @endif
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
