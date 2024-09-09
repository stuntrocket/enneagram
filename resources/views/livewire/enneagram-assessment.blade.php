<div class="mx-auto max-w-7xl mt-10 pb-10">
    @if ($showResults)
        <!-- Display the result after completing the test -->
        <div class="mt-4 p-4 bg-white rounded-xl">
            <div class="flex items-center justify-between">
                <h3 class="text-xl font-semibold text-slate-700">Your Top 3 Enneagram Types</h3>

                <!-- Back button at the top of the results page -->
                <button wire:click="startAgain" class="px-4 py-2 bg-rose-500 text-white rounded-lg hover:bg-rose-600">
                    Back &larr;
                </button>
            </div>

            <p class="mt-3 mb-3 text-slate-600 text-left max-w-2xl">
                The Enneagram system identifies nine distinct personality types, but people often have traits from multiple types.
                These top three types reflect your strongest matches based on your responses, helping you understand different aspects
                of your personality.
            </p>

            <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-4">
                @php
                    $typeDescriptions = [
                        'type_1' => '<span class="font-medium">The Reformer:</span><br/>Principled, Purposeful, Self-Controlled.',
                        'type_2' => '<span class="font-medium">The Helper</span><br/>Caring, Generous, and People-Oriented.',
                        'type_3' => '<span class="font-medium">The Achiever</span><br/>Success-Oriented, Driven, and Adaptable.',
                        'type_4' => '<span class="font-medium">The Individualist</span><br/>Creative, Sensitive, and Expressive.',
                        'type_5' => '<span class="font-medium">The Investigator</span><br/>Perceptive, Curious, and Independent.',
                        'type_6' => '<span class="font-medium">The Loyalist</span><br/>Committed, Responsible, and Security-Oriented.',
                        'type_7' => '<span class="font-medium">The Enthusiast</span><br/>Spontaneous, Fun-Loving, and Enthusiastic.',
                        'type_8' => '<span class="font-medium">The Challenger</span><br/>Assertive, Confident, and Decisive.',
                        'type_9' => '<span class="font-medium">The Peacemaker</span><br/>Easygoing, Receptive, and Reassuring.'
                    ];
                @endphp

                @foreach ($topThreeTypes as $type => $score)
                    <div class="p-5 bg-white rounded-2xl ring-1 ring-slate-200">
                        <h4 class="text-lg font-semibold text-slate-800">Type {{ str_replace('type_', '', $type) }}</h4>
                        <p class="mt-2 text-slate-600">{!! $typeDescriptions[$type] !!}</p>
                        <span class="inline-block rounded-md mt-4 text-sm text-slate-500 px-3 py-1 ring-1 ring-slate-200">Score: {{ $score }}</span><br/><br/>
                        <a href="#" class="mt-3 text-sm">Read more &rarr;</a>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Display the user's question-answer history -->
        <div class="mt-6 p-4 bg-white rounded-xl">
            <h3 class="text-lg font-semibold">Your answers:</h3>
            <ul class="mt-4 space-y-2">
                @foreach ($qaHistory as $qa)
                    <li>
                        <strong>Question:</strong> {{ $qa['question'] }}<br>
                        <strong>Answer:</strong> {{ $qa['answer'] }}
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- Button to start the test again -->
        <div class="mt-6">
            <button wire:click="startAgain" class="px-4 py-2 bg-rose-500 text-white rounded-lg hover:bg-rose-600">
                Start Again
            </button>
        </div>
    @else
        <!-- Display the current question -->
        <div class="p-6 bg-white rounded-xl ring-1 ring-slate-300">
            <h2 class="text-lg font-semibold">{{ $currentQuestion->question_text }}</h2>
            <ul class="mt-4 space-y-2">
                @foreach ($currentQuestion->answers as $answer)
                    <li>
                        <button wire:click="submitAnswer({{ $answer->id }})"
                                class="py-2 px-4 bg-white text-slate-700 rounded-lg hover:bg-slate-100 ring-1 ring-slate-200">
                            {{ $answer->answer_text }}
                        </button>
                    </li>
                @endforeach
            </ul>

            <!-- Only show the Back button if the current question is not the first one -->
            @if($currentQuestionIndex > 0)
                <div class="mt-4">
                    <button wire:click="goBack" class="py-2 px-4 bg-gray-500 text-white rounded-lg hover:bg-gray-600">
                        Back
                    </button>
                </div>
            @endif
        </div>
    @endif
</div>
