# copper-sec-oauth-index

`copper-sec-oauth-index` explores security tooling in PHP. The repository keeps the core rule set compact, then surrounds it with examples that show how the decisions move.

## Copper Sec Oauth Index Notes

The quickest review path is the verifier first, then the fixtures, then the operations note. That order makes it easy to see whether the code, data, and explanation still agree.

## Implementation Notes

The core is a scoring model over demand, capacity, latency, risk, and weight. That keeps trust boundaries, policy checks, and replay guards in one explicit decision path. The threshold is 158, with risk penalty 4, latency penalty 4, and weight bonus 5. The PHP implementation uses strict types and a small namespaced policy class.

## Why This Exists

This project keeps the domain idea close to the tests. That makes it useful as a reference implementation, a small experiment, or a starting point for a more specialized tool.

## Feature Notes

- Uses fixture data to keep policy checks changes visible in code review.
- Includes extended examples for replay guards, including `surge` and `degraded`.
- Documents claim validation tradeoffs in `docs/operations.md`.
- Runs locally with a single verification command and no external credentials.
- Stores project constants and verification metadata in `metadata/project.json`.

## Example Scenarios

The examples are meant to be readable before they are exhaustive. They cover enough variation to show how latency and risk can pull a decision below the threshold.

## Code Tour

- `src`: primary implementation
- `tests`: verification harness
- `fixtures`: compact golden scenarios
- `examples`: expanded scenario set
- `metadata`: project constants and verification metadata
- `docs`: operations and extension notes
- `scripts`: local verification and audit commands

## Local Setup

Use a normal shell with PHP available on `PATH`. The verifier is written as a PowerShell script because the portfolio was assembled on Windows.

## Try It

```powershell
powershell -NoProfile -ExecutionPolicy Bypass -File scripts/verify.ps1
```

This runs the language-level build or test path against the compact fixture set.

## Tests

```powershell
powershell -NoProfile -ExecutionPolicy Bypass -File scripts/audit.ps1
```

The audit command checks repository structure and README constraints before it delegates to the verifier.

## Boundaries

The repository favors determinism over breadth. It does not pull live data, keep secrets, or depend on network access for verification.

## Roadmap

- Add a loader for `examples/extended_cases.csv` and promote selected cases into the language test suite.
- Add a short report command that prints the score breakdown for a single scenario.
- Add malformed input fixtures so the failure path is as visible as the happy path.
- Add one more security tooling fixture that focuses on a malformed or borderline input.
