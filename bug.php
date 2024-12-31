function foo(a, b) {
  if (a === b) {
    return true;
  } else {
    return false;  // This line is unnecessary
  }
}

// Unnecessary else statement in conditional
// The `else` block is redundant here, since the `if` condition already handles both true and false cases. The statement can be simplified to simply return the result of the comparison directly.