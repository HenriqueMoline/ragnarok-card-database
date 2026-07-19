<?php

function traduzirScript($script)
{
    if (empty($script)) {
        return '';
    }

    // Dicionário de tradução
    $traducao = [
        // Atributos básicos
        'bStr'      => 'FOR',
        'bAgi'      => 'AGI',
        'bVit'      => 'VIT',
        'bInt'      => 'INT',
        'bDex'      => 'DES',
        'bLuk'      => 'SOR',
        'bAllStats' => 'Todos os Atributos',
        
        // Ataque e defesa
        'bBaseAtk'  => 'ATQ Base',
        'bAtkRate'  => 'ATQ %',
        'bMatk'     => 'ATQ Mágico',
        'bMatkRate' => 'ATQ Mágico %',
        'bDef'      => 'DEF',
        'bMdef'     => 'DEF Mágica',
        
        // HP e SP
        'bMaxHP'    => 'HP Máximo',
        'bMaxSP'    => 'SP Máximo',
        'bMaxHPrate'=> 'HP Máximo %',
        'bMaxSPrate'=> 'SP Máximo %',
        
        // Combat
        'bHit'      => 'Precisão',
        'bFlee'     => 'Esquiva',
        'bFlee2'    => 'Esquiva Perfeita',
        'bCritical' => 'Crítico',
        'bAspd'     => 'Velocidade de Ataque',
        'bAspdRate' => 'Velocidade de Ataque %',
        'bSpeedRate'=> 'Velocidade de Movimento %',
        
        // Recuperação
        'bHPrecovRate' => 'Recuperação HP %',
        'bSPrecovRate' => 'Recuperação SP %',
        'bHPGainValue' => 'Ganho HP',
        'bSPGainValue' => 'Ganho SP',
        
        // Dano
        'bLongAtkRate' => 'Dano Distância %',
        'bShortAtkRate'=> 'Dano Corpo a Corpo %',
        'bCritAtkRate' => 'Dano Crítico %',
        'bAtkEle'      => 'Elemento de Ataque',
        'bIgnoreDefClass' => 'Ignora DEF de',
        'bIgnoreMdefClassRate' => 'Ignora DEF Mágica de %',
        
        // Outros
        'bDelayrate'    => 'Delay %',
        'bFixedCast'    => 'Conjuração Fixa',
        'bVariableCastrate' => 'Conjuração Variável %',
        'bNoCastCancel' => 'Conjuração sem interrupção',
        'bNoGemStone'   => 'Sem necessidade de Gemas',
        'bNoKnockback'  => 'Imune a Repulsão',
        'bUnbreakableWeapon' => 'Arma inquebrável',
        'bUnbreakableArmor'  => 'Armadura inquebrável',
        'bNoWalkDelay'  => 'Sem atraso ao andar',
        'bRestartFullRecover' => 'Revive com HP/SP cheios',
        'bIntravision'  => 'Visão Verdadeira',
        'bSplashRange'  => 'Alcance de Splash',
        'bNoSizeFix'    => 'Ignora tamanho',
        'bNoRegen'      => 'Sem regeneração',
        'bDefEle'       => 'Elemento do personagem',
        'bShortWeaponDamageReturn' => 'Reflexão de dano corpo a corpo %',
        'bLongAtkDef'   => 'Defesa contra Distância',
        'bMagicDamageReturn' => 'Reflexão de dano mágico',
        'bUseSPrate'    => 'Custo de SP %',
        
        // Resistências
        'bSubEle'    => 'Resistência a',
        'bAddEle'    => 'Dano contra',
        'bMagicAddEle' => 'Dano Mágico contra',
        'bMagicAtkEle' => 'Dano Mágico de',
        
        // Raças
        'bSubRace'   => 'Resistência a',
        'bAddRace'   => 'Dano contra',
        'bMagicAddRace' => 'Dano Mágico contra',
        'bExpAddRace' => 'EXP contra',
        'bAddDefMonster' => 'DEF contra monstro',
        
        // Tamanhos
        'bSubSize'   => 'Resistência a tamanho',
        'bAddSize'   => 'Dano contra tamanho',
        'bMagicAddSize' => 'Dano Mágico contra tamanho',
        'bMagicSubSize' => 'Resistência Mágica a tamanho',
        
        // Classes
        'bSubClass'  => 'Resistência a',
        'bAddClass'  => 'Dano contra',
        'bMagicAddClass' => 'Dano Mágico contra',
        'bAddDamageClass' => 'Dano extra contra',
        'bMagicAddClassRate' => 'Dano Mágico contra %',
        'bAddRace2'  => 'Dano contra',
        'bSubRace2'  => 'Resistência a',
        'bMagicAddRace2' => 'Dano Mágico contra',
        
        // Habilidades
        'bSkillAtk'  => 'Dano da habilidade',
        'bSkillCooldown' => 'Tempo de recarga',
        'bSkillUseSP' => 'Custo de SP',
        'bSkillHeal' => 'Cura da habilidade',
        'bSkillHeal2' => 'Cura adicional da habilidade',
        'bSkillFixedCast' => 'Conjuração Fixa da habilidade',
        'bAutoSpell' => 'Auto conjurar',
        'bAutoSpellWhenHit' => 'Auto conjurar ao ser atingido',
        'bAutoSpellOnSkill' => 'Auto conjurar ao usar habilidade',
        'bAddMonsterDropItem' => 'Chance de drop',
        'bAddMonsterDropItemGroup' => 'Chance de drop do grupo',
        'bAddItemHealRate' => 'Cura de itens %',
        'bAddItemGroupHealRate' => 'Cura de itens do grupo %',
        'bCriticalAddRace' => 'Crítico extra contra',
        'bAddEff'    => 'Chance de aplicar',
        'bAddEff2'   => 'Chance de aplicar',
        'bAddEffWhenHit' => 'Chance de aplicar ao ser atingido',
        'bResEff'    => 'Resistência a',
        'bAddSkillBlow' => 'Empurrão da habilidade',
        'bWeaponDamageRate' => 'Dano da arma %',
        'bHPDrainRate' => 'Dreno de HP',
        'bSPDrainRate' => 'Dreno de SP',
        'bSPDrainValue' => 'Dreno de SP por hit',
        'bSPVanishRate' => 'Dreno de SP %',
        'bBreakWeaponRate' => 'Quebra de arma %',
        'bBreakArmorRate' => 'Quebra de armadura %',
        'bComaClass' => 'Coma contra',
        'bClassChange' => 'Troca de classe',
        'bNoMadoFuel' => 'Sem consumo de combustível',
        'bIgnoreMdefRaceRate' => 'Ignora DEF Mágica de raça %',
        'bIgnoreDefRaceRate' => 'Ignora DEF de raça %',
        'bRegenPercentHP' => 'Regeneração HP %',
        'bRegenPercentSP' => 'Regeneração SP %',
        'bHPRegenRate' => 'Regeneração HP',
        'bSPRegenRate' => 'Regeneração SP',
        'bHPLossRate' => 'Perda de HP',
        'bSPLossRate' => 'Perda de SP',
        'bPerfectHitAddRate' => 'Acerto Perfeito %',
        'bReduceDamageReturn' => 'Redução de dano refletido',
        'bNoMagicDamage' => 'Imune a dano mágico %',
        'bPerfectHitRate' => 'Acerto Perfeito %',
    ];
    
    // Tradução de elementos
    $elementos = [
        'Ele_Fire' => 'Fogo',
        'Ele_Water' => 'Água',
        'Ele_Wind' => 'Vento',
        'Ele_Earth' => 'Terra',
        'Ele_Poison' => 'Veneno',
        'Ele_Holy' => 'Sagrado',
        'Ele_Dark' => 'Sombra',
        'Ele_Ghost' => 'Fantasma',
        'Ele_Undead' => 'Morto-Vivo',
        'Ele_Neutral' => 'Neutro',
        'Ele_All' => 'Todos os Elementos',
    ];
    
    // Tradução de raças
    $racas = [
        'RC_DemiHuman' => 'Humanos',
        'RC_Player_Human' => 'Jogadores Humanos',
        'RC_Player_Doram' => 'Doram',
        'RC_Undead' => 'Mortos-Vivos',
        'RC_Demon' => 'Demônios',
        'RC_Angel' => 'Anjos',
        'RC_Dragon' => 'Dragões',
        'RC_Brute' => 'Bestas',
        'RC_Insect' => 'Insetos',
        'RC_Fish' => 'Peixes',
        'RC_Plant' => 'Plantas',
        'RC_Formless' => 'Sem Forma',
        'RC_All' => 'Todas as Raças',
    ];
    
    // Tradução de raças 2 (grupos)
    $racas2 = [
        'RC2_Goblin' => 'Goblins',
        'RC2_Kobold' => 'Kobolds',
        'RC2_Orc' => 'Orcs',
        'RC2_Golem' => 'Golems',
        'RC2_SCARABA' => 'Escaravelhos',
        'RC2_Edda_Arunafeltz' => 'Edda Arunafeltz',
    ];
    
    // Tradução de tamanhos
    $tamanhos = [
        'Size_Small' => 'Pequeno',
        'Size_Medium' => 'Médio',
        'Size_Large' => 'Grande',
        'Size_All' => 'Todos os Tamanhos',
    ];
    
    // Tradução de classes
    $classes = [
        'Class_Boss' => 'Chefes',
        'Class_Normal' => 'Normais',
        'Class_All' => 'Todos',
    ];
    
    // Tradução de efeitos
    $efeitos = [
        'Eff_Stun' => 'Atordoamento',
        'Eff_Sleep' => 'Sono',
        'Eff_Poison' => 'Veneno',
        'Eff_Freeze' => 'Congelamento',
        'Eff_Freezing' => 'Congelamento',
        'Eff_Stone' => 'Petrificação',
        'Eff_Curse' => 'Maldição',
        'Eff_Silence' => 'Silêncio',
        'Eff_Blind' => 'Cegueira',
        'Eff_Confusion' => 'Confusão',
        'Eff_Bleeding' => 'Sangramento',
        'Eff_Burning' => 'Queimadura',
        'Eff_Fear' => 'Medo',
        'Eff_Crystalize' => 'Cristalização',
        'Eff_WhiteImprison' => 'Prisão Branca',
        'Eff_Heat' => 'Calor',
        'Eff_Chill' => 'Frio',
    ];
    
    // Limpa e separa os comandos
    $script = str_replace(["\r", "\n"], ' ', $script);
    $comandos = explode(';', $script);
    $resultados = [];
    $indent = 0;
    
    foreach ($comandos as $comando) {
        $comando = trim($comando);
        if (empty($comando)) {
            continue;
        }
        
        // TRADUZ VARIÁVEIS
        $comando = preg_replace('/\.@r/', 'nível de refinamento', $comando);
        $comando = preg_replace('/\.@([a-zA-Z_]+)/', '$1', $comando);
        $comando = preg_replace('/getrefine\(\)/', 'nível de refinamento', $comando);
        $comando = preg_replace('/getskilllv\("([^"]+)"\)/', 'nível da habilidade "$1"', $comando);
        $comando = preg_replace('/BaseLevel/', 'Nível Base', $comando);
        $comando = preg_replace('/JobLevel/', 'Nível de Classe', $comando);
        $comando = preg_replace('/readparam\(bStr\)/', 'FOR', $comando);
        $comando = preg_replace('/readparam\(bAgi\)/', 'AGI', $comando);
        $comando = preg_replace('/readparam\(bVit\)/', 'VIT', $comando);
        $comando = preg_replace('/readparam\(bInt\)/', 'INT', $comando);
        $comando = preg_replace('/readparam\(bDex\)/', 'DES', $comando);
        $comando = preg_replace('/readparam\(bLuk\)/', 'SOR', $comando);
        
        // TRADUZ CONDIÇÕES
        $comando = preg_replace('/if\s*\(([^)]+)\)/', 'SE ($1)', $comando);
        $comando = preg_replace('/else\s*\{/', 'SENÃO {', $comando);
        $comando = preg_replace('/else/', 'SENÃO', $comando);
        
        // TRADUZ OPERADORES LÓGICOS
        $comando = str_replace('>=', '>=', $comando);
        $comando = str_replace('<=', '<=', $comando);
        $comando = str_replace('==', '==', $comando);
        $comando = str_replace('&&', 'E', $comando);
        $comando = str_replace('||', 'OU', $comando);
        $comando = str_replace('!', 'NÃO ', $comando);
        
        // TRADUZ CLASSES
        $classesJobs = [
            'Job_Merchant' => 'Mercador',
            'Job_Thief' => 'Ladino',
            'Job_Swordman' => 'Espadachim',
            'Job_Mage' => 'Mago',
            'Job_Archer' => 'Arqueiro',
            'Job_Acolyte' => 'Acólito',
            'Job_Rogue' => 'Ladino',
            'Job_Assassin' => 'Assassino',
            'Job_Knight' => 'Cavaleiro',
            'Job_Crusader' => 'Cruzado',
            'Job_Wizard' => 'Mago',
            'Job_Sage' => 'Sábio',
            'Job_Hunter' => 'Caçador',
            'Job_Bard' => 'Bardo',
            'Job_Dancer' => 'Dançarina',
            'Job_Blacksmith' => 'Ferreiro',
            'Job_Alchemist' => 'Alquimista',
            'Job_Priest' => 'Sacerdote',
            'Job_Monk' => 'Monge',
            'Job_Star_Gladiator' => 'Gladiador Estelar',
            'Job_Soul_Linker' => 'Conector de Almas',
            'Job_Gunslinger' => 'Pistoleiro',
            'Job_Kagerou' => 'Kagerou',
            'Job_Oboro' => 'Oboro',
            'Job_Summoner' => 'Invocador',
            'Job_Novice' => 'Noviço',
            'BaseClass == ' => 'Classe Base é ',
        ];
        
        foreach ($classesJobs as $busca => $troca) {
            $comando = str_replace($busca, $troca, $comando);
        }
        
        // Processa bonus2 com condicionais
        if (preg_match('/bonus2\s+(\w+),\s*([^,]+),\s*([^)]+)/', $comando, $matches)) {
            $tipo = $matches[1];
            $alvo = trim($matches[2]);
            $valor = trim($matches[3]);
            
            $tipoTrad = isset($traducao[$tipo]) ? $traducao[$tipo] : $tipo;
            
            // Traduz o alvo
            if (isset($elementos[$alvo])) {
                $alvo = $elementos[$alvo];
            } elseif (isset($racas[$alvo])) {
                $alvo = $racas[$alvo];
            } elseif (isset($tamanhos[$alvo])) {
                $alvo = $tamanhos[$alvo];
            } elseif (isset($classes[$alvo])) {
                $alvo = $classes[$alvo];
            } elseif (isset($racas2[$alvo])) {
                $alvo = $racas2[$alvo];
            } else {
                $alvo = trim($alvo, '"');
            }
            
            // Se o valor tem cálculos ou condicionais
            if (preg_match('/[+\-*\/()]|getrefine|BaseLevel/', $valor)) {
                $resultados[] = "$tipoTrad $alvo = $valor";
            } else {
                $sinal = $valor >= 0 ? '+' : '';
                $resultados[] = "$tipoTrad $alvo $sinal$valor%";
            }
            continue;
        }
        
        // Processa bonus normal com cálculos
        if (preg_match('/bonus\s+(\w+),\s*([^,]+)/', $comando, $matches)) {
            $tipo = $matches[1];
            $valor = trim($matches[2]);
            
            $tipoTrad = isset($traducao[$tipo]) ? $traducao[$tipo] : $tipo;
            
            // Se o valor tem cálculos
            if (preg_match('/[+\-*\/()]|getrefine|BaseLevel/', $valor)) {
                $resultados[] = "$tipoTrad = $valor";
            } else {
                $negativo = strpos($valor, '-') === 0;
                $valor = ltrim($valor, '-');
                $sinal = $negativo ? '-' : '+';
                $resultados[] = "$tipoTrad $sinal$valor";
            }
            continue;
        }
        
        // Processa skill
        if (preg_match('/skill\s*"([^"]+)",\s*(\d+)/', $comando, $matches)) {
            $nome = $matches[1];
            $nivel = $matches[2];
            $resultados[] = "Habilidade $nome Nv.$nivel";
            continue;
        }
        
        // Processa sc_start
        if (preg_match('/sc_start\s+([^,]+),\s*(\d+),\s*(\d+)/', $comando, $matches)) {
            $status = $matches[1];
            $duracao = $matches[2];
            $nivel = $matches[3];
            $resultados[] = "Aplica efeito $status (Nv.$nivel) por " . ($duracao/1000) . "s";
            continue;
        }
        
        // Processa sc_end
        if (preg_match('/sc_end\s+([^;]+)/', $comando, $matches)) {
            $status = $matches[1];
            $resultados[] = "Remove efeito $status";
            continue;
        }
        
        // Processa autobonus
        if (preg_match('/autobonus\s*\{([^}]*)\},\s*(\d+),\s*(\d+)/', $comando, $matches)) {
            $efeito = $matches[1];
            $chance = $matches[2];
            $duracao = $matches[3];
            $resultados[] = "Auto-bônus: $efeito (chance $chance%, duração " . ($duracao/1000) . "s)";
            continue;
        }
        
        // Processa autobonus2
        if (preg_match('/autobonus2\s*\{([^}]*)\},\s*(\d+),\s*(\d+)/', $comando, $matches)) {
            $efeito = $matches[1];
            $chance = $matches[2];
            $duracao = $matches[3];
            $resultados[] = "Auto-bônus ao ser atingido: $efeito (chance $chance%, duração " . ($duracao/1000) . "s)";
            continue;
        }
        
        // Processa bonus3
        if (preg_match('/bonus3\s+(\w+),\s*"([^"]+)",\s*(\d+),\s*(\d+)/', $comando, $matches)) {
            $tipo = $matches[1];
            $alvo = $matches[2];
            $valor1 = $matches[3];
            $valor2 = $matches[4];
            
            $tipoTrad = isset($traducao[$tipo]) ? $traducao[$tipo] : $tipo;
            
            if ($tipo == 'bAddMonsterDropItem') {
                $resultados[] = "Chance de drop do item $alvo +$valor1% (monstro $valor2)";
            } elseif ($tipo == 'bAutoSpell' || $tipo == 'bAutoSpellWhenHit') {
                $resultados[] = "$tipoTrad $alvo Nv.$valor1 (chance $valor2%)";
            } else {
                $resultados[] = "$tipoTrad $alvo, $valor1, $valor2";
            }
            continue;
        }
        
        // Processa bonus4
        if (preg_match('/bonus4\s+(\w+),\s*"([^"]+)",\s*(\d+),\s*(\d+),\s*(\d+)/', $comando, $matches)) {
            $tipo = $matches[1];
            $alvo = $matches[2];
            $valor1 = $matches[3];
            $valor2 = $matches[4];
            $valor3 = $matches[5];
            
            $tipoTrad = isset($traducao[$tipo]) ? $traducao[$tipo] : $tipo;
            $resultados[] = "$tipoTrad $alvo, $valor1, $valor2, $valor3";
            continue;
        }
        
        // Processa bonus5
        if (preg_match('/bonus5\s+(\w+),\s*"([^"]+)",\s*(\d+),\s*(\d+),\s*([^,]+),\s*(\d+)/', $comando, $matches)) {
            $tipo = $matches[1];
            $alvo = $matches[2];
            $valor1 = $matches[3];
            $valor2 = $matches[4];
            $valor3 = $matches[5];
            $valor4 = $matches[6];
            
            $tipoTrad = isset($traducao[$tipo]) ? $traducao[$tipo] : $tipo;
            
            if ($tipo == 'bAutoSpell' || $tipo == 'bAutoSpellWhenHit') {
                $resultados[] = "$tipoTrad $alvo Nv.$valor1 (chance $valor2%)";
            } else {
                $resultados[] = "$tipoTrad $alvo, $valor1, $valor2, $valor3, $valor4";
            }
            continue;
        }
        
        // Processa heal
        if (preg_match('/heal\s+([^,]+),\s*([^)]+)/', $comando, $matches)) {
            $hp = $matches[1];
            $sp = $matches[2];
            $resultados[] = "Cura HP: $hp, SP: $sp";
            continue;
        }
        
        // Processa itemheal
        if (preg_match('/itemheal\s+([^,]+),\s*([^)]+)/', $comando, $matches)) {
            $hp = $matches[1];
            $sp = $matches[2];
            $resultados[] = "Cura de item HP: $hp, SP: $sp";
            continue;
        }
        
        // Processa showscript
        if (preg_match('/showscript\s+"([^"]+)"/', $comando, $matches)) {
            $texto = $matches[1];
            $resultados[] = "Mostra mensagem: \"$texto\"";
            continue;
        }
        
        // Se for apenas abre/fecha chaves
        if ($comando == '{' || $comando == '}') {
            continue;
        }
        
        // Se chegou aqui e tem algo, adiciona o comando
        if (!empty($comando)) {
            $resultados[] = $comando;
        }
    }
    
    // Limpa resultados e junta
    $resultado = implode(', ', array_filter($resultados));
    
    // Remove vírgulas extras
    $resultado = preg_replace('/,\s*,/', ',', $resultado);
    $resultado = preg_replace('/,\s*$/', '', $resultado);
    
    return $resultado;
}

// ============================================
// TESTES COM EXEMPLOS FORNECIDOS
// ============================================

$testes = [
    // Exemplo do usuário
    '.@r = getrefine(), bonus2 bAddRace,RC_Fish,5; bonus2 bAddEle,Ele_Water,5; if (.@r>=7) { bonus2 bAddRace,RC_Fish,5; } if (.@r>=9) { bonus2 bAddEle,Ele_Water,5; }',
    
    // Outros exemplos complexos
    '.@r = getrefine(); bonus bDef,5; if (.@r>=7) { bonus bDef,10; } if (.@r>=9) { bonus bDef,15; }',
    
    'bonus2 bAddSize,Size_All,5; if (getrefine()>=10) { bonus2 bAddSize,Size_All,5; }',
];





?>