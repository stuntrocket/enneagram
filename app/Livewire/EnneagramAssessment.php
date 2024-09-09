<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Question;
use App\Models\Answer;

class EnneagramAssessment extends Component
{
    public $currentQuestionIndex = 0;  // Tracks the current question
    public $questions = [];            // All questions to be displayed
    public $userResponses = [];        // Stores the user's selected answers
    public $totalScore = [];           // Stores scores for each type
    public $topThreeTypes = [];        // Stores the top three types
    public $qaHistory = [];            // Stores the questions and answers for AI prompt
    public $showResults = false;       // Flag to determine whether to show results or questions

    public function mount()
    {
        // Load all questions and their answers from the database
        $this->questions = Question::with('answers')->get();

        // Check if the session already contains results, if so, load them
        if (session()->has('topThreeTypes') && session()->has('qaHistory')) {
            $this->topThreeTypes = session('topThreeTypes');
            $this->qaHistory = session('qaHistory');
            $this->showResults = true;  // Show the results
        } else {
            $this->initializeTotalScore();  // Initialize the score tracking
        }
    }

    public function initializeTotalScore()
    {
        // Initialize the score tracking for each Enneagram type
        for ($i = 1; $i <= 9; $i++) {
            $this->totalScore["type_{$i}"] = 0;
        }
    }

    public function submitAnswer($answerId)
    {
        // Make sure totalScore is initialized
        if (empty($this->totalScore)) {
            $this->initializeTotalScore();
        }

        // Store the user's response
        $this->userResponses[$this->currentQuestionIndex] = $answerId;

        // Find the selected answer and update the total score for the Enneagram types
        $this->updateTotalScore($answerId);

        // Add to the QA history for AI prompt purposes
        $currentQuestion = $this->questions[$this->currentQuestionIndex];
        $this->qaHistory[$this->currentQuestionIndex] = [
            'question' => $currentQuestion->question_text,
            'answer' => Answer::find($answerId)->answer_text,
        ];

        // Move to the next question, or finish if on the last one
        if ($this->currentQuestionIndex < count($this->questions) - 1) {
            $this->currentQuestionIndex++;
        } else {
            $this->calculateResult();
        }
    }

    public function updateTotalScore($answerId)
    {
        $answer = Answer::find($answerId);
        for ($i = 1; $i <= 9; $i++) {
            $typeField = "type_{$i}_weight";
            $this->totalScore["type_{$i}"] += $answer->$typeField ?? 0;
        }
    }

    public function goBack()
    {
        if ($this->currentQuestionIndex > 0) {
            $this->currentQuestionIndex--;
        }
    }

    public function calculateResult()
    {
        // Sort the total scores in descending order and keep the top 3 types
        arsort($this->totalScore);
        $this->topThreeTypes = array_slice($this->totalScore, 0, 3, true);

        // Store the results in session
        session()->put('topThreeTypes', $this->topThreeTypes);
        session()->put('qaHistory', $this->qaHistory);

        // Show the results after calculation
        $this->showResults = true;
    }

    public function startAgain()
    {
        // Reset the session and restart the test
        session()->forget(['topThreeTypes', 'qaHistory', 'result']);
        $this->initializeTotalScore();  // Re-initialize the scores
        $this->currentQuestionIndex = 0;  // Reset the question index
        $this->qaHistory = [];  // Clear question-answer history
        $this->userResponses = [];  // Clear responses
        $this->showResults = false;  // Go back to the questions view
    }

    public function nextSteps()
    {
        // Placeholder for next steps logic
    }

    public function render()
    {
        return view('livewire.enneagram-assessment', [
            'currentQuestion' => $this->questions[$this->currentQuestionIndex],
            'qaHistory' => $this->qaHistory, // Pass QA history to the view
            'topThreeTypes' => $this->topThreeTypes, // Ensure topThreeTypes is available in the view
            'showResults' => $this->showResults,  // Flag to toggle between questions and results
        ]);
    }
}
