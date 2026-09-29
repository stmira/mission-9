<?php
function repairBarrier(): void {
    echo "=== 魔法研究所 防衛結界システム ===\n";
    usleep(500000);

    $defenses = [];

    // ==========================================
    // 【指示】担当Aも担当Bも、下の1行を自分の設定を新たに追加せよ！
    // 担当A: $defenses['physical'] = fn() => "SHIELD_UP";
    // 担当B: $defenses['magical'] = fn() => "SPELL_BOUND";
    $defenses['physical'] = fn() => "SHIELD_UP";
    // ==========================================

    echo "結界の同調率を計測中...\n";
    usleep(500000);

    // 登録された関数（術式）を実行して結果を取得
    $phys = isset($defenses['physical']) ? $defenses['physical']() : "FAIL";
    $magi = isset($defenses['magical'])  ? $defenses['magical']()  : "FAIL";

    if ($phys === "SHIELD_UP" && $magi === "SPELL_BOUND") {
        echo "🛡️ 【結界完成】物理盾と符文魔方陣が連動！魔獣の突進を弾き返した！\n";
    } else {
        echo "💥 【結界崩壊】術式が不完全です。(物理: {$phys}, 魔法: {$magi})\n";
        exit(1);
    }
}
repairBarrier();