<?php

namespace App\Command;

use App\Entity\Usuario;
use App\Repository\UsuarioRepository;
use Symfony\Component\Console\Attribute\Argument;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

#[AsCommand(name: 'app:criar-usuario', description: 'Cria um usuário para acessar o painel')]
class CriarUsuarioCommand
{
    public function __construct(
        private UsuarioRepository $usuarioRepository,
        private UserPasswordHasherInterface $userPasswordHasher,
    ) {
    }

    public function __invoke(
        SymfonyStyle $io,
        #[Argument] string $email,
        #[Argument] string $senha,
    ): int {
        if (empty($email) || empty($senha)) {
            throw new \InvalidArgumentException('Informe o e-mail e senha!');
        }

        $usuario = new Usuario();
        $usuario
            ->setEmail($email)
            ->setPassword($this->userPasswordHasher->hashPassword($usuario, $senha))
            ->setRoles(['ROLE_USER']);

        $this->usuarioRepository->salvar($usuario);

        $io->success("Usuário {$email} criado com sucesso!");

        return Command::SUCCESS;
    }
}
