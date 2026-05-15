<?php

defined('ABSPATH') or die;

function pt2_get_greeting( string $name ): string {
    return "Hello, {$name}! Welcome.";
}

function pt2_add_numbers( int $a, int $b ): int {
    return $a + $b;
}

class PT2_Sample {
    private string $label;

    public function __construct( string $label ) {
        $this->label = $label;
    }

    public function get_label(): string {
        return $this->label;
    }

    public function describe(): string {
        return sprintf( 'PT2_Sample[%s]', $this->label );
    }
}

$sample = new PT2_Sample( 'demo' );
error_log( $sample->describe() );
error_log( pt2_get_greeting( 'World' ) );
error_log( (string) pt2_add_numbers( 3, 7 ) );
