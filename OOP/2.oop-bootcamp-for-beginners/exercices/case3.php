<?php

class Content
{
    // Properties

    protected $title;
    protected $text;

    public function __construct($title, $text)
    {
        $this->title = $title;
        $this->text = $text;
    }

    // Methods

    public function getTitle()
    {
        return $this->title;
    }

    public function getText()
    {
        return $this->text;
    }

    public function display()
    {
        echo "<h1>{$this->title}</h1>";
        echo "<p>{$this->text}</p>";
    }
}

class Article extends Content
{
    // Properties

    protected $breaking;

    public function __construct($title, $text, $breaking = false)
    {
        parent::__construct($title, $text);
        $this->breaking = $breaking;
    }

    // Methods

    public function setBreaking($breaking)
    {
        $this->breaking = $breaking;
    }

    public function isBreaking()
    {
        return $this->breaking;
    }

    public function display()
    {
        $displayTitle = $this->breaking ? "BREAKING: " . $this->title : $this->title;
        echo "<h2>{$displayTitle}</h2>";
        echo "<p>{$this->text}</p>";
    }
}

class Ad extends Content
{
    public function display()
    {
        $displayTitle = strtoupper($this->title); // Titre en majuscules
        echo "<h2>$displayTitle</h2>";
        echo "<p>{$this->text}</p>";
    }
}

class Vacancy extends Content
{
    public function display()
    {
        $displayTitle = $this->title . " - apply now!"; // Ajout du suffixe
        echo "<h2>$displayTitle</h2>";
        echo "<p>{$this->text}</p>";
    }
}

$contents = [
    new Article("News", "This is a news article"),
    new Article("Sports", "This is a sports article", true),
    new Ad("Ad", "This is an advertisement"),
    new Ad("Get the brand new dishwasher !", "This is an advertisement"),
    new Vacancy("Job", "We're hiring!"),
];

foreach ($contents as $content) {
    $content->display();
}
