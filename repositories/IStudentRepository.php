<?php
interface IStudentRepository
{

    public static function all(): array;

    public static function find(string $id): array;

    public static function update(array $data, string $id): array;

    public static function delete(string $id): void;

    public static function create(array $data): array;
}
