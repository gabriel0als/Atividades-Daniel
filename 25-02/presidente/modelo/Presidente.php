<?php

    class Presidente {
        private int $numero;
        private string $nome;
        private int $inicio;
        private int $fim;

        
        public function getNumero(): int
        {
                return $this->numero;
        }

        public function setNumero(int $numero): self
        {
                $this->numero = $numero;

                return $this;
        }


        public function getNome(): string
        {
                return $this->nome;
        }

        public function setNome(string $nome): self
        {
                $this->nome = $nome;

                return $this;
        }

        public function getInicio(): int
        {
                return $this->inicio;
        }


        public function setInicio(int $inicio): self
        {
                $this->inicio = $inicio;

                return $this;
        }

        public function getFim(): int
        {
                return $this->fim;
        }

        public function setFim(int $fim): self
        {
                $this->fim = $fim;

                return $this;
        }
    }