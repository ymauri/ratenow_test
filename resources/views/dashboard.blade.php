<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @isset($report)                     
                    
                        <div class="clt">
                            <ul>
                                <li>
                                    {{ $report->t }}
                                    <ul>
                                        <li>
                                            Modules
                                            <ul>
                                            @foreach($report->modules as $module)  
                                                <li>{{$loop->index}}
                                                    <ul>
                                                        @php 
                                                            $moduleDataClass = get_class_vars(get_class($module));
                                                        @endphp
                                                        @foreach ($moduleDataClass as $name => $value)                                             
                                                            @if(!is_array($module->$name)) <li>{{$name}}: {{$module->$name}}</li>@endif                                                
                                                        @endforeach
                                                        <li>Views
                                                            <ul>
                                                                @foreach($module->views as $view) 
                                                                    <li>{{$loop->index}}
                                                                        <ul>
                                                                            @php 
                                                                                $viewDataClass = get_class_vars(get_class($view));
                                                                            @endphp
                                                                            @foreach ($viewDataClass as $name => $value)                                             
                                                                                @if(!is_array($view->$name)) <li>{{$name}}: {{$view->$name}}</li>@endif                                                
                                                                            @endforeach
                                                                            <li>Elements
                                                                                <ul>
                                                                                    @foreach($view->e as $element) 
                                                                                        @foreach($element->ed as $elementData) 
                                                                                            <li>{{$loop->index}}
                                                                                                <ul>
                                                                                                    @php 
                                                                                                        $elementDataDataClass = get_class_vars(get_class($elementData));
                                                                                                    @endphp
                                                                                                    @foreach ($elementDataDataClass as $name => $value)                                             
                                                                                                        @if(!is_array($elementData->$name)) <li>{{$name}}: {{$elementData->$name}}</li>@endif                                                
                                                                                                    @endforeach
                                                                                                    <ul>
                                                                                                        @foreach($elementData->so as $choice) 
                                                                                                            <li>{{$loop->index}}
                                                                                                                <ul>
                                                                                                                    <li>{{$choice->q}}</li>
                                                                                                                    <li>{{$choice->c}}</li>
                                                                                                                </ul>
                                                                                                            </li>
                                                                                                        @endforeach
                                                                                                    </ul>
                                                                                                </ul>
                                                                                            </li>
                                                                                        @endforeach
                                                                                    @endforeach
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            @endforeach
                                            </ul>
                                        </li>                              
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    @endisset
                    @isset($error)     
                        {{ $error }}                
                    @endisset
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

