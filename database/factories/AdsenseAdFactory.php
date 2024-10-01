<?php

namespace Database\Factories;
use App\Models\AdsenseAd;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AdsenseAd>
 */
class AdsenseAdFactory extends Factory
{
    protected $model = AdsenseAd::class;            
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $type = $this->faker->randomElement([
            'landing-header-section',
            'landing-features-section-728x90',
            'landing-templates-section-728x90',
            'landing-tools-section-728x90',
            'landing-how-it-works-section-728x90',
            'landing-testimonials-section-728x90',
            'landing-pricing-section-728x90',
            'landing-faq-section-728x90',
        ]);

        // Dynamic code generation based on type
        $code = match ($type) {
            'landing-header-section' => $this->faker->unique()->regexify('HEADER-[A-Z0-9]{6}'),
            'landing-features-section-728x90' => $this->faker->unique()->regexify('FEATURES-[A-Z0-9]{6}'),
            'landing-templates-section-728x90' => $this->faker->unique()->regexify('TEMPLATE-[A-Z0-9]{6}'),
            'landing-tools-section-728x90' => $this->faker->unique()->regexify('TOOLS-[A-Z0-9]{6}'),
            'landing-how-it-works-section-728x90' => $this->faker->unique()->regexify('HOWITWORKS-[A-Z0-9]{6}'),
            'landing-testimonials-section-728x90' => $this->faker->unique()->regexify('TESTIMONIALS-[A-Z0-9]{6}'),
            'landing-pricing-section-728x90' => $this->faker->unique()->regexify('PRICING-[A-Z0-9]{6}'),
            'landing-faq-section-728x90' => $this->faker->unique()->regexify('FAQ-[A-Z0-9]{6}'),
            default => $this->faker->unique()->regexify('[A-Z0-9]{10}'), // Fallback
        };

        return [
            'status' => $this->faker->randomElement(['1', '0']),
            'code' => $code,
            'type' => $type,
            'created_at' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 years', 'now'),
        ];
    }
}
