<?php

declare(strict_types=1);

/**
 * Questão 1 - Identificação de animais
 *
 * Faz perguntas ao usuário pelo terminal (sim/nao) seguindo a árvore de
 * classificação abaixo até identificar o animal escolhido.
 *
 * Mamíferos -> Quadrúpedes -> Carnívoros  -> Leão
 *                          -> Herbívoros  -> Cavalo
 *           -> Bípedes     -> Onívoros    -> Homem
 *                          -> Frutívoros  -> Macaco
 *           -> Voadores                   -> Morcego
 *           -> Aquáticos                  -> Baleia
 * Aves      -> Não voadoras -> Tropicais  -> Avestruz
 *                           -> Polares    -> Pinguim
 *           -> Nadadoras                  -> Pato
 *           -> De rapina                  -> Águia
 * Répteis   -> Com casco                  -> Tartaruga
 *           -> Carnívoros                 -> Crocodilo
 *           -> Sem patas                  -> Cobra
 */

// lê a resposta e tipa como texto
$resposta = (string) readline("É mamífero? (sim/nao): ");

if ($resposta === "sim") {
    // ---------- MAMÍFEROS ----------
    $resposta = (string) readline("É quadrúpede? (sim/nao): ");

    if ($resposta === "sim") {
        $resposta = (string) readline("É carnívoro? (sim/nao): ");

        if ($resposta === "sim") {
            echo "Então o animal escolhido foi leão." . PHP_EOL;
        } elseif ($resposta === "nao") {
            $resposta = (string) readline("É herbívoro? (sim/nao): ");

            if ($resposta === "sim") {
                echo "Então o animal escolhido foi cavalo." . PHP_EOL;
            } elseif ($resposta === "nao") {
                echo "Animal não identificado." . PHP_EOL;
            } else {
                echo "Resposta inválida. Responda com sim ou nao." . PHP_EOL;
            }
        } else {
            echo "Resposta inválida. Responda com sim ou nao." . PHP_EOL;
        }
    } elseif ($resposta === "nao") {
        $resposta = (string) readline("É bípede? (sim/nao): ");

        if ($resposta === "sim") {
            $resposta = (string) readline("É onívoro? (sim/nao): ");

            if ($resposta === "sim") {
                echo "Então o animal escolhido foi homem." . PHP_EOL;
            } elseif ($resposta === "nao") {
                $resposta = (string) readline("É frutívoro? (sim/nao): ");

                if ($resposta === "sim") {
                    echo "Então o animal escolhido foi macaco." . PHP_EOL;
                } elseif ($resposta === "nao") {
                    echo "Animal não identificado." . PHP_EOL;
                } else {
                    echo "Resposta inválida. Responda com sim ou nao." . PHP_EOL;
                }
            } else {
                echo "Resposta inválida. Responda com sim ou nao." . PHP_EOL;
            }
        } elseif ($resposta === "nao") {
            $resposta = (string) readline("É voador? (sim/nao): ");

            if ($resposta === "sim") {
                echo "Então o animal escolhido foi morcego." . PHP_EOL;
            } elseif ($resposta === "nao") {
                $resposta = (string) readline("É aquático? (sim/nao): ");

                if ($resposta === "sim") {
                    echo "Então o animal escolhido foi baleia." . PHP_EOL;
                } elseif ($resposta === "nao") {
                    echo "Animal não identificado." . PHP_EOL;
                } else {
                    echo "Resposta inválida. Responda com sim ou nao." . PHP_EOL;
                }
            } else {
                echo "Resposta inválida. Responda com sim ou nao." . PHP_EOL;
            }
        } else {
            echo "Resposta inválida. Responda com sim ou nao." . PHP_EOL;
        }
    } else {
        echo "Resposta inválida. Responda com sim ou nao." . PHP_EOL;
    }
} elseif ($resposta === "nao") {
    // ---------- AVES ----------
    $resposta = (string) readline("É ave? (sim/nao): ");

    if ($resposta === "sim") {
        $resposta = (string) readline("É não voadora? (sim/nao): ");

        if ($resposta === "sim") {
            $resposta = (string) readline("É tropical? (sim/nao): ");

            if ($resposta === "sim") {
                echo "Então o animal escolhido foi avestruz." . PHP_EOL;
            } elseif ($resposta === "nao") {
                $resposta = (string) readline("É polar? (sim/nao): ");

                if ($resposta === "sim") {
                    echo "Então o animal escolhido foi pinguim." . PHP_EOL;
                } elseif ($resposta === "nao") {
                    echo "Animal não identificado." . PHP_EOL;
                } else {
                    echo "Resposta inválida. Responda com sim ou nao." . PHP_EOL;
                }
            } else {
                echo "Resposta inválida. Responda com sim ou nao." . PHP_EOL;
            }
        } elseif ($resposta === "nao") {
            $resposta = (string) readline("É nadadora? (sim/nao): ");

            if ($resposta === "sim") {
                echo "Então o animal escolhido foi pato." . PHP_EOL;
            } elseif ($resposta === "nao") {
                $resposta = (string) readline("É de rapina? (sim/nao): ");

                if ($resposta === "sim") {
                    echo "Então o animal escolhido foi águia." . PHP_EOL;
                } elseif ($resposta === "nao") {
                    echo "Animal não identificado." . PHP_EOL;
                } else {
                    echo "Resposta inválida. Responda com sim ou nao." . PHP_EOL;
                }
            } else {
                echo "Resposta inválida. Responda com sim ou nao." . PHP_EOL;
            }
        } else {
            echo "Resposta inválida. Responda com sim ou nao." . PHP_EOL;
        }
    } elseif ($resposta === "nao") {
        // ---------- RÉPTEIS ----------
        $resposta = (string) readline("É réptil? (sim/nao): ");

        if ($resposta === "sim") {
            $resposta = (string) readline("Tem casco? (sim/nao): ");

            if ($resposta === "sim") {
                echo "Então o animal escolhido foi tartaruga." . PHP_EOL;
            } elseif ($resposta === "nao") {
                $resposta = (string) readline("É carnívoro? (sim/nao): ");

                if ($resposta === "sim") {
                    echo "Então o animal escolhido foi crocodilo." . PHP_EOL;
                } elseif ($resposta === "nao") {
                    $resposta = (string) readline("Não tem patas? (sim/nao): ");

                    if ($resposta === "sim") {
                        echo "Então o animal escolhido foi cobra." . PHP_EOL;
                    } elseif ($resposta === "nao") {
                        echo "Animal não identificado." . PHP_EOL;
                    } else {
                        echo "Resposta inválida. Responda com sim ou nao." . PHP_EOL;
                    }
                } else {
                    echo "Resposta inválida. Responda com sim ou nao." . PHP_EOL;
                }
            } else {
                echo "Resposta inválida. Responda com sim ou nao." . PHP_EOL;
            }
        } elseif ($resposta === "nao") {
            echo "Animal não identificado." . PHP_EOL;
        } else {
            echo "Resposta inválida. Responda com sim ou nao." . PHP_EOL;
        }
    } else {
        echo "Resposta inválida. Responda com sim ou nao." . PHP_EOL;
    }
} else {
    echo "Resposta inválida. Responda com sim ou nao." . PHP_EOL;
}
