@props(['title' => 'Select Tests', 'suites' => []])

<div class="list-interactive">
    @foreach($suites as $repositoryTitle => $repository) 
        <div class="list-repository list">
            <div class="title"> 
                <label for="selector-repository-{{ $repositoryTitle }}" class="checkbox">
                    <input class="repository-selector" type="checkbox" id="selector-repository-{{ $repositoryTitle }}" value="{{$repositoryTitle}}">
                    <span class="checkmark"></span>
                </label>
                {{ $repositoryTitle }}
                <span class="expand"></span>
            </div>

            @foreach($repository as $serviceTitle => $service)
                <div class="list-service list">
                    <div class="title"> 
                        <label for="selector-service-{{ $repositoryTitle }}-{{ $serviceTitle }}" class="checkbox">
                            <input class="service-selector" type="checkbox" id="selector-service-{{ $repositoryTitle }}-{{ $serviceTitle }}" value="{{$serviceTitle}}">
                            <span class="checkmark"></span>
                        </label>
                        {{ $serviceTitle }}
                        <span class="expand"></span>
                    </div>

                    @foreach($service as $suiteTitle => $suite)
                        <div class="list-suite list">
                            <div class="title"> 
                                <label for="selector-suite-{{ $suiteTitle }}" class="checkbox">
                                    <input class="suite-selector" type="checkbox" id="selector-suite-{{ $suiteTitle }}" value="{{$suiteTitle}}">
                                    <span class="checkmark"></span>
                                </label>
                                {{ $suiteTitle }}
                                <span class="expand"></span>
                            </div>
                            <div class="list-test list">
                                @foreach($suite as $test)
                                    <div class="test">
                                        @if($test['workflow_id'])
                                            <label for="selector-test-{{ $test['test_name'] }}" class="checkbox">
                                                <input class="test-selector" type="checkbox" id="selector-test-{{ $test['test_name'] }}" name="tests[]" value="{{ json_encode($test) }}">
                                                <span class="checkmark"></span>
                                            </label>
                                        @else
                                            <span class="alert-icon error" title="This test has no workflow ID and cannot be selected."></span>
                                        @endif
                                        {{ $test['test_name'] }}
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                
                </div>
            @endforeach
        
        </div>
    @endforeach
</div>

