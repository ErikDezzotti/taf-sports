-- ============================================================================
-- FIX: Atualizar tabela ci_sessions para CodeIgniter 3
-- ============================================================================
-- EXECUTAR NO XCLOUD (phpMyAdmin) APÓS DEPLOY
-- ============================================================================

USE `taf-database`;

-- Remove tabela antiga (CodeIgniter 2)
DROP TABLE IF EXISTS `ci_sessions`;

-- Cria tabela nova (CodeIgniter 3)
CREATE TABLE `ci_sessions` (
    `id` varchar(128) NOT NULL,
    `ip_address` varchar(45) NOT NULL,
    `timestamp` int(10) unsigned DEFAULT 0 NOT NULL,
    `data` blob NOT NULL,
    KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================================
-- PRONTO! Site funcionará sem erro de sessão
-- ============================================================================
