<?php
class StudentRepository extends DBRepository implements IStudentRepository
{
    public static function all(): array
    {
        $students =  [
            [
                'student_number' => '2023-0001',
                'firstname' => 'John',
                'lastname' => 'Doe',
                'dob' => '2000-01-01'
            ],
            [
                'student_number' => '2023-xxxx',
                'firstname' => 'John',
                'lastname' => 'Doe',
                'dob' => '2000-01-01'
            ]

        ];

        return $students;
    }

    public static function find(string $id): array
    {
        return [];
    }

    public static function update(array $data, string $id): array
    {
        return [];
    }

    public static function delete(string $id): void {}

    public static function create(array $data): array
    {
        return [];
    }
}
