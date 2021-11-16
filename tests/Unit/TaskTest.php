<?php
namespace Tests\Unit;

use App\Models\Task;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class TaskTest extends TestCase
{
    use WithFaker;
    use WithoutMiddleware; // use this trait
    
    public function test_can_create_task() {
        
        $data = [
            'name' => $this->faker->sentence,
            'label' => $this->faker->words(3, true),
            'details' => $this->faker->paragraph,
        ];
        $this->withoutExceptionHandling();
        $this->post('/api/tasks', $data)->assertStatus(200);
    }

    public function test_can_update_task() {
        $task = Task::factory()->create();
        $data = [
            'name' => $this->faker->sentence,
            'label' => $this->faker->words(3, true),
            'details' => $this->faker->paragraph,
        ];
        $this->withoutExceptionHandling();
        $this->put('/api/tasks/' . $task->id, $data)->assertStatus(200);
    }

    public function test_can_show_task() {
        $task = Task::factory()->create();
        $this->get('/api/tasks/' . $task->id)->assertStatus(200);
    }

    public function test_can_delete_task() {
        $task = Task::factory()->create();
        $this->withoutExceptionHandling();
        $this->delete('/api/tasks/' . $task->id)->assertStatus(200);
    }
}