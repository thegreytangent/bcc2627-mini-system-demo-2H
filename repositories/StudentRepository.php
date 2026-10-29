<?php
class StudentRepository extends DBRepository implements IStudentRepository
{
    public static function all(): array
    {
        $students = self::query("SELECT * FROM student");
      
        $result = [];
        foreach ($students as $s) {
            $result[] = new Student(
                $s['student_number'],
                $s['firstname'],
                $s['lastname'],
                $s['dob']
            );
        }
        return $result;
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
