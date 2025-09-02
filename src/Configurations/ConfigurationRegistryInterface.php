<?php declare( strict_types = 1 );
namespace CodeKandis\TiphySessionsIntegration\Configurations;

use CodeKandis\Configurations\ConfigurationRegistryInterface as OriginConfigurationRegistryInterface;
use CodeKandis\Sessions\Configurations\SessionsConfigurationInterface;

/**
 * Represents the interface of any configuration registry providing a sessions configuration.
 * @package codekandis/tiphy-sessions-integration
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ConfigurationRegistryInterface extends OriginConfigurationRegistryInterface
{
	/**
	 * Gets the sessions configuration.
	 * @return ?SessionsConfigurationInterface The sessions configuration.
	 */
	public function getSessionsConfiguration(): ?SessionsConfigurationInterface;
}
