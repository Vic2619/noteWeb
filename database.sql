CREATE TABLE IF NOT EXISTS users (
    id SERIAL PRIMARY KEY, -- Thay AUTO_INCREMENT bằng SERIAL
    email VARCHAR(191) NOT NULL UNIQUE,
    display_name VARCHAR(120) NOT NULL,
    password_hash VARCHAR(255) NOT NULL, -- Để lưu bcrypt hash như đề bài yêu cầu
    avatar_url TEXT DEFAULT NULL, -- PostgreSQL dùng TEXT hoặc MEDIUMTEXT tương đương
    is_activated SMALLINT NOT NULL DEFAULT 0, -- Thay TINYINT bằng SMALLINT
    activation_token VARCHAR(100) DEFAULT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);
