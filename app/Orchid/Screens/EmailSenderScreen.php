<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;

class EmailSenderScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'EmailSenderScreen';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [];
    }
}

/**
 * The name is displayed on the user's screen and in the headers
 */
public function name(): ?string
{
    return "Email sender";
}

/**
 * The description is displayed on the user's screen under the heading
 */
public function description(): ?string
{
    return "Tool that sends ad-hoc email messages.";
}

