<?php

return [
    'common_header' => 'PHP8.3は、PHP言語のメジャーアップデートです。クラス定数の型付け、読み取り専用プロパティのクローン、ランダム機能追加など、多くの新機能が含まれています。さらにパフォーマンスの向上、バグフィックス、コードのクリーンナップも行われました。',
    'documentation' => 'ドキュメント',
    'main_title' => 'Released!',
    'main_subtitle' => 'PHP8.3は、PHP言語のメジャーアップデートです。<br class="display-none-md">クラス定数の型付け、読み取り専用プロパティのクローン、ランダム機能追加など、多くの新機能が含まれています。さらにパフォーマンス向上、バグフィックス、コードのクリーンナップも行われました。',
    'upgrade_now' => 'PHP8.3へのアップデートはこちら！',
    'readonly_title' => '読み取り専用プロパティのディープクローン',
    'readonly_description' => '<code>readonly</code>プロパティをクローンする際、<code>__clone</code>メソッド内で一度だけプロパティを変更できるようになりました。',
    'json_validate_title' => '関数<code>json_validate()</code>の追加',
    'json_validate_description' => '関数<code>json_validate()</code>は、<code>json_decode()</code>よりも効率的にJSONが正しい形式かをチェックすることができます。',
    'typed_class_constants_title' => 'クラス定数の型付け',
    'override_title' => '<code>アトリビュート#[\Override]</code>の追加',
    'override_description' => 'メソッドにアトリビュート<code>#[\Override]</code>を追加すると、親クラスもしくはインターフェイスに同じメソッドが定義されていることを確認します。これにより、メソッドを意図的にオーバーライドしていると明示することができ、また親メソッドが変更されたときに検出できます。',
    'randomizer_getbytesfromstring_title' => 'メソッド<code>Randomizer::getBytesFromString()</code>の追加',
    'randomizer_getbytesfromstring_description' => 'PHP8.2で実装された<a href="/releases/8.2/ja.php#random_extension">Randomエクステンション</a>に、ランダム文字列を生成する新たなメソッドを追加しました。これにより、サブドメイン名などちょっとした文字列や任意長の数値型文字列などを容易に生成可能となります。',
    'randomizer_getfloat_nextfloat_title' => 'メソッド<code>Randomizer::getFloat()</code>と<code>Randomizer::nextFloat()</code>の追加',
    'randomizer_getfloat_nextfloat_description' => '<p>浮動小数点演算はその精度や丸め要素により、偏りのない乱数を生成することは比較的高難度であり、よく見られるユーザランド実装は結果が偏っていたり範囲外になっていたりすることがよくあります。</p><p>Randomizerエクステンションでは普遍的な浮動小数乱数を生成するために2つのメソッドが実装されました。<code>Randomizer::getFloat()</code>は<a href="https://doi.org/10.1145/3503512" target="_blank" rel="noopener noreferrer">Drawing Random Floating-Point Numbers from an Interval. Frédéric Goualard・ACM Trans. Model. Comput. Simul.・32:3・2022.</a>という論文で紹介されたγ-sectionというアルゴリズムで乱数を生成します。</p>',
    'dynamic_class_constant_fetch_title' => 'クラス定数の文字列指定',
    'command_line_linter_title' => 'コマンドラインLinterの複数ファイル指定',
    'command_line_linter_description' => '<p>コマンドラインLinterに複数のファイルを渡せるようになりました。</p>',

    'new_classes_title' => '新しいクラス・インターフェイス・関数',
    'new_dom' => 'DOMに<a href="/manual/ja/domelement.getattributenames.php"><code>DOMElement::getAttributeNames()</code></a>・<a href="/manual/ja/domelement.insertadjacentelement.php"><code>DOMElement::insertAdjacentElement()</code></a>・<a href="/manual/ja/domelement.insertadjacenttext.php"><code>DOMElement::insertAdjacentText()</code></a>・<a href="/manual/ja/domelement.toggleattribute.php"><code>DOMElement::toggleAttribute()</code></a>・<a href="/manual/ja/domnode.contains.php"><code>DOMNode::contains()</code></a>・<a href="/manual/ja/domnode.getrootnode.php"><code>DOMNode::getRootNode()</code></a>・<a href="/manual/ja/domnode.isequalnode.php"><code>DOMNode::isEqualNode()</code></a>・<code>DOMNameSpaceNode::contains()</code>・<a href="/manual/ja/domparentnode.replacechildren.php"><code>DOMParentNode::replaceChildren()</code></a>メソッドが追加されました。',
    'new_intl' => 'Intlに<a href="/manual/ja/intlcalendar.setdate.php"><code>IntlCalendar::setDate()</code></a>・<a href="/manual/ja/intlcalendar.setdatetime.php"><code>IntlCalendar::setDateTime()</code></a>・<a href="/manual/ja/intlgregoriancalendar.createfromdate.php"><code>IntlGregorianCalendar::createFromDate()</code></a>・<a href="/manual/ja/intlgregoriancalendar.createfromdatetime.php"><code>IntlGregorianCalendar::createFromDateTime()</code></a>が追加されました。',
    'new_ldap' => 'LDAPに<code>ldap_connect_wallet()</code>・<code>ldap_exop_sync()</code>が追加されました。',
    'new_mb_str_pad' => 'マルチバイト文字列関数に<a href="/manual/ja/function.mb-str-pad.php"><code>mb_str_pad()</code></a>が追加されました。',
    'new_posix' => 'POSIX関数に<a href="/manual/ja/function.posix-sysconf.php"><code>posix_sysconf()</code></a>・<a href="/manual/ja/function.posix-pathconf.php"><code>posix_pathconf()</code></a>・<a href="/manual/ja/function.posix-fpathconf.php"><code>posix_fpathconf()</code></a>・<a href="/manual/ja/function.posix-eaccess.php"><code>posix_eaccess()</code></a>が追加されました。',
    'new_reflection' => 'リフレクションに<a href="/manual/ja/reflectionmethod.createfrommethodname.php"><code>ReflectionMethod::createFromMethodName()</code></a>が追加されました。',
    'new_socket' => 'ソケットに<a href="/manual/ja/function.socket-atmark.php"><code>socket_atmark()</code></a>が追加されました。',
    'new_str' => '文字列関数に<a href="/manual/ja/function.str-increment.php"><code>str_increment()</code></a>・<a href="/manual/ja/function.str-decrement.php"><code>str_decrement()</code></a>・<a href="/manual/ja/function.stream-context-set-options.php"><code>stream_context_set_options()</code></a>が追加されました。',
    'new_ziparchive' => 'Zip関数に<a href="/manual/ja/ziparchive.getarchiveflag.php"><code>ZipArchive::getArchiveFlag()</code></a>が追加されました。',
    'new_openssl_ec' => 'OpenSSLエクステンションがEC parameterによる鍵の生成に対応しました。',
    'new_ini' => '最大スタックサイズを設定するINI設定<a href="/manual/ja/migration83.other-changes.php#migration83.other-changes.ini"><code>zend.max_allowed_stack_size</code></a>が追加されました',
    'ini_fallback' => 'iniファイルがデフォルト値を指定する構文に対応しました。',
    'anonymous_readonly' => '無名クラスをreadonlyにすることができるようになりました。',

    'bc_title' => '非推奨、および互換性のない変更',
    'bc_datetime' => '<a href="https://wiki.php.net/rfc/datetime-exceptions">Date/Timeエクステンションの改善</a>。',
    'bc_arrays' => '配列を負数<code>n</code>から始めた場合、次の自動採番は<code>0</code>ではなく<code>n + 1</code>になりました。',
    'bc_range' => '<code>range()</code>関数の挙動が変更になりました。',
    'bc_traits' => 'トレイトとstaticプロパティの同時使用時の挙動が変更されました。',
    'bc_umultipledecimalseparators' => '定数<code>U_MULTIPLE_DECIMAL_SEPERATORS</code>は非推奨になりました。<code>U_MULTIPLE_DECIMAL_SEPARATORS</code>を使いましょう。',
    'bc_mtrand' => '正しくないMt19937実装である定数<a href="/manual/ja/random.constants.php#constant.mt-rand-php"><code>MT_RAND_PHP</code></a>は非推奨になりました。',
    'bc_reflection' => 'メソッド<a href="/manual/ja/reflectionclass.getstaticproperties.php"><code>ReflectionClass::getStaticProperties()</code></a>の返り値がnull許容型ではなくなりました。',
    'bc_ini' => 'INI設定<a href="/manual/ja/info.configuration.php#ini.assert.active"><code>assert.active</code></a>・<a href="/manual/ja/info.configuration.php#ini.assert.bail"><code>assert.bail</code></a>・<a href="/manual/ja/info.configuration.php#ini.assert.callback"><code>assert.callback</code></a>・<a href="/manual/ja/info.configuration.php#ini.assert.exception"><code>assert.exception</code></a>・<a href="/manual/ja/info.configuration.php#ini.assert.warning"><code>assert.warning</code></a>は非推奨になりました。',
    'bc_standard' => '関数<a href="/manual/ja/function.get-class.php"><code>get_class()</code></a>と<a href="/manual/ja/function.get-parent-class.php"><code>get_parent_class()</code></a>は引数が必須になりました。',
    'bc_sqlite3' => 'SQLite3のエラーモードのデフォルトが例外になりました。',

    'footer_title' => 'さらなる性能向上、よりよい構文、すぐれた型安全性。',
    'footer_description' => '<p>PHP8.3の<a href="/downloads">ダウンロードはこちら</a>。Windowsバイナリは<a href="https://windows.php.net/download">PHP for Windows</a>で見つけることができます。<a href="/ChangeLog-8.php#PHP_8_3">ChangeLogはこちら</a>です。</p>
        <p>マニュアルにある<a href="/manual/ja/migration83.php">マイグレーションガイド</a>では、新機能や変更点についてのより詳しい情報が記載されています。</p>',
];