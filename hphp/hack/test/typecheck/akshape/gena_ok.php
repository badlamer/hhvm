<?hh //strict

function gen_int(): Awaitable<int> {
  // UNSAFE
}

function gen_string(): Awaitable<string> {
  // UNSAFE
}

function take_int(int $_): void {}
function take_string(string $_): void {}

async function test(): Awaitable<void> {
  $a = array('int' => gen_int(), 'string' => gen_string());
  $a = await gena($a);

  take_int($a['int']);
  take_string($a['string']);
}
